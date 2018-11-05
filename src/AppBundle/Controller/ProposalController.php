<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Cost;
use AppBundle\Entity\Proposal;
use AppBundle\Entity\User;
use AppBundle\Form\Model\DraweeRiskFilterModel;
use AppBundle\Form\Model\ProposalFilterModel;
use AppBundle\Form\Type\CalculatorType;
use AppBundle\Form\Type\DraweeRiskFilterType;
use AppBundle\Form\Type\ProposalEditType;
use AppBundle\Form\Type\ProposalFilterType;
use AppBundle\Form\Type\ProposalType;
use AppBundle\Model\CalculatorModel;
use AppBundle\Model\ProposalModel;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ProposalController extends Controller
{
    /**
     * @Route("/list-proposal", name="list_proposal")
     */
    public function listAction(Request $request)
    {
        $days = $this->getDoctrine()->getRepository(Proposal::class);

        $proposalModel = new ProposalFilterModel();
        if($request->query->get('from'))
        {
            $dateFrom = \DateTime::createFromFormat("d-m-Y H:i:s", $request->query->get('from') . " 00:00:00");

        } else {
            $dateFrom = new \DateTime();
            $dateFrom->setTime(0,0,0);
            $dateFrom->modify("-30 days");
        }
        $proposalModel->setFrom($dateFrom);

        if(!$request->query->get('status'))
        {
            $proposalModel->setStatus([CalculatorModel::STUDY, CalculatorModel::APPROVED, CalculatorModel::ISSUE]);
        }
        if($request->query->get('to'))
        {
            $dateTo = \DateTime::createFromFormat("d-m-Y H:i:s", $request->query->get('to') . " 23:59:59");
        }else {
            $dateTo = new \DateTime();
            $dateTo->setTime(23,59,59);
        }
        if($request->query->get('financial'))
        {
            $financial = $this->getDoctrine()->getRepository(Company::class)->find($request->query->get('financial'));
            $proposalModel->setFinancial($financial);
        }
        if($request->query->get('user'))
        {
            $user = $this->getDoctrine()->getRepository(User::class)->find($request->query->get('user'));
            $proposalModel->setUser($user);
        }
        $proposalModel->setTo($dateTo);

        $form = $this->createForm(ProposalFilterType::class, $proposalModel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $proposalModel = $form->getData();
            $proposals =$this->getDoctrine()->getRepository(Proposal::class)->getItemsByFilters($proposalModel);
        } else {
            $proposals =$this->getDoctrine()->getRepository(Proposal::class)->getItemsByFilters($proposalModel);
        }

//        $proposals = $this->getDoctrine()->getManager()->getRepository(Proposal::class)->findAll();
        return $this->render('AppBundle:Proposal:list.html.twig', ['form' => $form->createView(), 'proposals' => $proposals]);
    }

    /**
     * @Route("/create-proposal", name="create_proposal")
     */
    public function createProposalAction(Request $request)
    {
        $proposal = new Proposal();

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $proposal->setUser($user);
        $form = $this->createForm(ProposalType::class, $proposal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $proposal = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal);
            $em->flush();
            return $this->redirect("create-calculator/". $proposal->getId());
        }
        return $this->render('AppBundle:Proposal:createProposal.html.twig', ['form' => $form->createView()]);
    }
    /**
     * @Route("/edit-proposal/{proposal}", name="edit_proposal")
     */
    public function editProposalAction(Proposal $proposal, Request $request)
    {
        $form = $this->createForm(ProposalEditType::class, $proposal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $proposal = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($proposal);
            $em->flush();
            return $this->redirect($this->generateUrl('show_proposal', ['id' => $proposal->getId()]));
        }
        return $this->render('AppBundle:Proposal:editProposal.html.twig', ['form' => $form->createView()]);
    }


    /**
     * @Route("/delete-proposal/{proposal}", name="delete_proposal")
     */
    public function deleteAction($proposal, Request $request)
    {
        $proposalObj = $this->getDoctrine()->getRepository(Proposal::class)->find($proposal);
        $this->getDoctrine()->getManager()->remove($proposalObj);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl('list_proposal'));

    }


    /**
     * @Route("/delete-calculator/{calculator}", name="delete_calculator")
     */
    public function deleteCalculatorAction($calculator, Request $request)
    {
        $calculatorObj = $this->getDoctrine()->getRepository(Calculator::class)->find($calculator);
        $this->getDoctrine()->getManager()->remove($calculatorObj);
    //dump($proposal, $proposalObj);die;
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl('list_proposal'));

    }

    /**
     * @Route("/edit-calculator/{calculator}", name="edit_calculator")
     */
    public function editCalculatorAction($calculator, Request $request)
    {
        $calculator = $this->getDoctrine()->getRepository(Calculator::class)->find($calculator);

        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);
        if ( $form->isValid()) {
            $calculator = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($calculator);
            $em->flush();

            if ($form->getClickedButton() && 'save' === $form->getClickedButton()->getName()) {
                return $this->redirect($this->generateUrl("show_proposal",['id' => $calculator->getProposal()->getId()]));
            }
            else {
                return $this->redirect($this->generateUrl("create_calculator",['proposal' => $calculator->getProposal()->getId()]));
            }
        }
        $form->get('introduce')->setData('tae');
        return $this->render('AppBundle:Proposal:createCalculator.html.twig', ['form' => $form->createView(), 'edit' => true]);
    }

    /**
     * @Route("/create-calculator/{proposal}", name="create_calculator")
     */
    public function createCalculatorAction($proposal, Request $request)
    {
        $calculator = new Calculator();
        $calculator->setTimbres(0);
        $calculator->setOmf(0);
        $calculator->setMensajeria(0);
        $calculator->setBurofax(0);
        $calculator->setGastos(0);
        $calculator->setProposal($this->getDoctrine()->getRepository(Proposal::class)->find($proposal));
        $calculator->setFormalizacion(new \DateTime());
        $calculator->setVencimiento(new \DateTime("+1 day"));
        $calculator->setCosteFinanciero(new Cost());
        $calculator->setCosteFinancieroLedser(new Cost());
        $calculator->setCosteTotal(new Cost());
        dump($request->query->get('drawee'), $request->query->all());
        $form = $this->createForm(CalculatorType::class, $calculator);


        $form->handleRequest($request);
        if ( $form->isValid()) {
            $calculator = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($calculator);
            $em->flush();

            if ($form->getClickedButton() && 'save' === $form->getClickedButton()->getName()) {
                return $this->redirect($this->generateUrl("show_proposal",['id' => $calculator->getProposal()->getId()]));
            }
        else {
            return $this->redirect($this->generateUrl("create_calculator",['proposal' => $calculator->getProposal()->getId(), 'drawee' => $calculator->getDrawee()->getId(), 'state' => $calculator->getState() ]));
            }
        }

        return $this->render('AppBundle:Proposal:createCalculator.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/drawee-rist", name="drawee_rist")
     */
    public function draweeRiskAction(Request $request)
    {
        $days = $this->getDoctrine()->getRepository(Proposal::class);

        $draweeRiskModel = new DraweeRiskFilterModel();
        $draweeRiskModel->setDate(new \DateTime());
        $form = $this->createForm(DraweeRiskFilterType::class, $draweeRiskModel);
        $form->handleRequest($request);
        $calculatorGroup = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $draweeRiskModel = $form->getData();
            $calculators = $this->getDoctrine()->getRepository(Calculator::class)->getCalculatorsByFilters($draweeRiskModel);
            $now = new \DateTime();
            /** @var Calculator $calculator */
            foreach ($calculators as $calculator)
            {
                $group = $now < $calculator->getVencimiento()?'+':'-';
                $calculatorGroup[$group][] = $calculator;
            }
        }

        return $this->render('AppBundle:Proposal:draweeRisk.html.twig', ['form' => $form->createView(), 'calculators' => $calculatorGroup]);
    }

    /**
     * @Route("/show-proposal/{id}", name="show_proposal")
     */
    public function showAction($id, Request $request)
    {
        $proposal = $this->getDoctrine()->getManager()->getRepository(Proposal::class)->find($id);
        $calculators = $this->getDoctrine()->getManager()->getRepository(Calculator::class)->findBy(['proposal' => $id]);
        $general = [];
        if(count($calculators) > 1)
        {
            /** @var Calculator $calculator */
            foreach ($calculators as $calculator)
            {
                $general['dias'] += $calculator->getDias();
                $general['nominal'] += $calculator->getNominal();
                $general['honorarios'] += $calculator->getHonorarios();
                $general['timbres'] += $calculator->getTimbres();
                $general['omf'] += $calculator->getOmf();
                $general['mensajeria'] += $calculator->getMensajeria();
                $general['burofax'] += $calculator->getBurofax();
                $general['gastos'] += $calculator->getGastos();
                $general['costeFinanciero']['total'] += $calculator->getCosteFinanciero()->getTotal();
                $general['costeFinancieroLedser']['total'] += $calculator->getCosteFinancieroLedser()->getTotal();
                $general['costeTotal']['total'] += $calculator->getCosteTotal()->getTotal();

                $general['costeFinanciero']['tae'] += $calculator->getCosteFinanciero()->getTae();
                $general['costeFinancieroLedser']['tae'] += $calculator->getCosteFinancieroLedser()->getTae();
                $general['costeTotal']['tae'] += $calculator->getCosteTotal()->getTae();

                $general['costeFinanciero']['mensual'] += $calculator->getCosteFinanciero()->getMensual();
                $general['costeFinancieroLedser']['mensual'] += $calculator->getCosteFinancieroLedser()->getMensual();
                $general['costeTotal']['mensual'] += $calculator->getCosteTotal()->getMensual();

                $general['costeFinanciero']['mensual'] += $calculator->getCosteFinanciero()->getMensual();
                $general['costeFinancieroLedser']['mensual'] += $calculator->getCosteFinancieroLedser()->getMensual();
                $general['costeTotal']['mensual'] += $calculator->getCosteTotal()->getMensual();

                $general['costeFinanciero']['retencion'] += $calculator->getCosteFinanciero()->getRetencion();
                $general['costeFinancieroLedser']['retencion'] += $calculator->getCosteFinancieroLedser()->getRetencion();
                $general['costeTotal']['retencion'] += $calculator->getCosteTotal()->getRetencion();

                $general['costeFinanciero']['nominal'] += $calculator->getCosteFinanciero()->getNominal();
                $general['costeFinancieroLedser']['nominal'] += $calculator->getCosteFinancieroLedser()->getNominal();
                $general['costeTotal']['nominal'] += $calculator->getCosteTotal()->getNominal();

                $general['costeFinanciero']['coste'] += $calculator->getCosteFinanciero()->getCoste();
                $general['costeFinancieroLedser']['coste'] += $calculator->getCosteFinancieroLedser()->getCoste();
                $general['costeTotal']['coste'] += $calculator->getCosteTotal()->getCoste();

                $general['costeFinanciero']['liquido'] += $calculator->getCosteFinanciero()->getLiquido();
                $general['costeFinancieroLedser']['liquido'] += $calculator->getCosteFinancieroLedser()->getLiquido();
                $general['costeTotal']['liquido'] += $calculator->getCosteTotal()->getLiquido();

                $general['costeFinanciero']['retencionTotal'] += $calculator->getCosteFinanciero()->getRetencionTotal();
                $general['costeFinancieroLedser']['retencionTotal'] += $calculator->getCosteFinancieroLedser()->getRetencionTotal();
                $general['costeTotal']['retencionTotal'] += $calculator->getCosteTotal()->getRetencionTotal();


            }
        }

        return $this->render('AppBundle:Proposal:show.html.twig', ['proposal' => $proposal, 'calculators' => $calculators, 'general' => $general]);
    }
}
