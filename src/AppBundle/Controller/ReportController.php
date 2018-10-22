<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Proposal;
use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use AppBundle\Form\Model\CalendarModel;
use AppBundle\Form\Type\CalendarFilterType;
use AppBundle\Form\Type\CalendarType;
use AppBundle\Form\Type\ReportType;
use AppBundle\Repository\CalculatorRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    /**
     * @Route("/report-list", name="report_list")
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $today = new \DateTime();
        $days = $this->getDoctrine()->getRepository(Report::class);

        $calendarModel = new CalendarFilterModel();
        $calendarModel->setUser($user);
        if(!$request->query->get('done'))
        {
            $calendarModel->setDone(0);
        }

        if($request->query->get('dayForm'))
        {
            $dateFrom = \DateTime::createFromFormat("d-m-Y H:i:s", $request->query->get('dayForm') . " 00:00:00");
            $calendarModel->setDateFrom($dateFrom);
        } else {
            $now = new \DateTime();
            $calendarModel->setDateFrom($now->setTime(0,0,0));
        }
        if($request->query->get('dayTo'))
        {
            $calendarModel->setDateTo(\DateTime::createFromFormat("d-m-Y H:i:s", $request->query->get('dayTo') . " 23:59:59"));
        } else {
            $now = new \DateTime();
            $calendarModel->setDateTo($now->setTime(23,59,59));
        }

        $form = $this->createForm(CalendarFilterType::class, $calendarModel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $calendarModel = $form->getData();
            $reports =$this->getDoctrine()->getRepository(Report::class)->getItemsByFilters($calendarModel);
        } else {
            $reports =$this->getDoctrine()->getRepository(Report::class)->getItemsByFilters($calendarModel);
        }
        $reportsGroupBy = [];
        foreach ($reports as $report)
        {
            if(!isset($reportsGroupBy[$report->getCompany()->getId()]))
            {
                $reportsGroupBy[$report->getCompany()->getId()] = $report;
            } elseif($reportsGroupBy[$report->getCompany()->getId()]->getDate() < $report->getDate())
            {
                $reportsGroupBy[$report->getCompany()->getId()] = $report;
            }
        }
        return $this->render('AppBundle:Report:index.html.twig', ['form' => $form->createView(), 'reports' => array_values($reportsGroupBy)]);
    }

    /**
     * @Route("/calendar", name="calendar")
     */
    public function calendarAction(Request $request)
    {
        $month = (int)$request->query->get('month', date('m'));
        $year = $request->query->get('year', date('Y'));
        $running_day = date('w',mktime(0,0,1,$month,1,$year));
        $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
        $thisMonth = new \DateTime();
        $thisMonth->setDate($year,$month, 1);
        $thisMonth->setTime(0,0,0);
        $today = new \DateTime();
        $nextMonth = clone $thisMonth;
        $nextMonth->modify("+1 month");
        $nextMonth->setTime(0,0,0);
        $beforeMonth = clone $thisMonth;
        $beforeMonth->modify("-1 month");

        $calendarModel = new CalendarModel();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $calendarModel->setUser($user);
        $form = $this->createForm(CalendarType::class, $calendarModel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $calendarModel = $form->getData();
        } else
        {
            dump($form->getErrors(true));
        }
        $reports = $calculators = $clients = [];
        if($calendarModel->getClientType() === 1 || is_null($calendarModel->getClientType()))
        {
            $reports = $this->getDoctrine()->getRepository(Report::class)->getReportToCalendar($calendarModel->getUser(), $thisMonth, $nextMonth);
        }
        if($calendarModel->getClientType() === 2)
        {
            $clients = $this->getDoctrine()->getRepository(Calculator::class)->getReportToCalendarCliente(
                $thisMonth,
                $nextMonth,
                $calendarModel->getUser()
            );
        }
        if($calendarModel->getClientType() === 3)
        {
                $calculators = $this->getDoctrine()->getRepository(Calculator::class)->getReportToCalendar(
                $thisMonth,
                $nextMonth,
                $calendarModel->getUser()
            );
        }
        return $this->render('AppBundle:Report:calendar.html.twig',
            [
                'days_in_month' => $days_in_month,
                'running_day' => $running_day,
                'today' => $today,
                'nextMonth' => $nextMonth,
                'beforeMonth' => $beforeMonth,
                'thisMonth' => $thisMonth,
                'reports' => $reports,
                'calculators' => $calculators,
                'clients' => $clients,
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/report-create/{company}", name="report_create")
     */
    public function createAction($company = null, Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $report = new Report();
        $report->setUser($user);
        $now = new \DateTime();

        $now->setTimeZone(new \DateTimeZone("Europe/Madrid"));
        $now->setTime(11,0);
        $report->setDate($now);
        $report->setDone(0);
        if($company)
        {
            $report->setCompany($this->getDoctrine()->getRepository(Company::class)->find($company));
        }

        if($company){
            $company = $this->getDoctrine()->getManager()->getRepository(Company::class)->find($company);
            $report->setCompany($company);
        }
        $form = $this->createForm(ReportType::class, $report);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $report = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();
            return $this->redirect("report-list");
        }
        return $this->render('AppBundle:Report:create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/show-report/{id}", name="show_report")
     */
    public function showAction($id, Request $request)
    {
        $report = $this->getDoctrine()->getRepository(Report::class)->find($id);
        $report->setDone(1);
        $form = $this->createForm(ReportType::class, $report);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $report = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();
            return $this->redirect( $this->generateUrl('report_create', ['company' => $report->getCompany()->getId()]));
        }
        $history = $this->getDoctrine()->getRepository(Report::class)->findBy(['company' => $report->getCompany()], array('id' => 'DESC'));
        $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findBy(['company' => $report->getCompany()]);
        return $this->render('AppBundle:Report:show.html.twig', ['report' => $report, 'contacts' => $contacts, 'history' => $history, 'form' => $form->createView()]);
    }

    /**
     * @Route("/delete-report/{company}", name="delete_report")
     */
    public function deleteAction($company, Request $request)
    {
        $company = $this->getDoctrine()->getRepository(Company::class)->find($company);
        $reports = $this->getDoctrine()->getRepository(Report::class)->findBy(['company' => $company]);
        foreach ($reports as $report)
        {
            $this->getDoctrine()->getManager()->remove($report);
        }
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl("report_list"));
    }
}
