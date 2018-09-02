<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Proposal;
use AppBundle\Entity\Report;
use AppBundle\Form\Model\CalendarFilterModel;
use AppBundle\Form\Type\CalendarFilterType;
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
        $running_day = date('w',mktime(0,0,0,$month,1,$year));
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

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $reports = $this->getDoctrine()->getRepository(Report::class)->getItemsByFilters($user, $thisMonth, $nextMonth);
        $calculators = $this->getDoctrine()->getRepository(Calculator::class)->getReportToCalendar($thisMonth, $nextMonth);

        return $this->render('AppBundle:Report:calendar.html.twig',
            [
                'days_in_month' => $days_in_month,
                'running_day' => $running_day,
                'today' => $today,
                'nextMonth' => $nextMonth,
                'beforeMonth' => $beforeMonth,
                'thisMonth' => $thisMonth,
                'reports' => $reports,
                'calculators' => $calculators
            ]);
    }

    /**
     * @Route("/report-create", name="report_create")
     */
    public function createAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $report = new Report();
        $report->setUser($user);
        $report->setDate(new \DateTime());
        $report->setDone(0);

        if($request->query->has("companyId")){
            $company = $this->getDoctrine()->getManager()->getRepository(Company::class)->find($request->query->get("companyId"));
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
        $form = $this->createForm(ReportType::class, $report);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $report = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();
            return $this->redirect("/report-create?companyId=");
        }
        $history = $this->getDoctrine()->getRepository(Report::class)->findBy(['company' => $report->getCompany()]);
        $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findBy(['company' => $report->getCompany()]);
        return $this->render('AppBundle:Report:show.html.twig', ['report' => $report, 'contacts' => $contacts, 'history' => $history, 'form' => $form->createView()]);
    }
}
