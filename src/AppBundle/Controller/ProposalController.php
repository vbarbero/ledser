<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Cost;
use AppBundle\Entity\Proposal;
use AppBundle\Entity\User;
use AppBundle\Form\Model\DraweeRiskFilterModel;
use AppBundle\Form\Model\ProposalFilterModel;
use AppBundle\Form\Model\RemesaCalculadoraModel;
use AppBundle\Form\Model\RemesaModel;
use AppBundle\Form\Type\CalculatorType;
use AppBundle\Form\Type\DraweeRiskFilterType;
use AppBundle\Form\Type\ProposalEditType;
use AppBundle\Form\Type\ProposalFilterType;
use AppBundle\Form\Type\ProposalType;
use AppBundle\Form\Type\RemesaType;
use AppBundle\Model\CalculatorModel;
use AppBundle\Model\ProposalModel;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\CalculatorFakeType;

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
            $dateFrom->modify("first day of this month");
        }
        $proposalModel->setFrom($dateFrom);

        if(!$request->query->get('status'))
        {
            $proposalModel->setStatus([CalculatorModel::CLOSE]);
        }
        if($request->query->get('to'))
        {
            $dateTo = \DateTime::createFromFormat("d-m-Y H:i:s", $request->query->get('to') . " 23:59:59");
        }else {
            $dateTo = new \DateTime();
            $dateTo->setTime(23,59,59);
            $dateTo->modify("last day of this month");
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
        $form->add('next', SubmitType::class, ['label' => 'Next'])
            ->add('remesa', SubmitType::class, ['label' => 'Remesa']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $proposal = $form->getData();
            $em = $this->getDoctrine()->getManager();

            if ($form->getClickedButton() && 'next' === $form->getClickedButton()->getName()) {
                $proposal->setRemesa(false);
                $em->persist($proposal);
                $em->flush();
                return $this->redirect($this->generateUrl("create_calculator", ['proposal' => $proposal->getId()] ) );
            }
            else {
                $proposal->setRemesa(true);
                $em->persist($proposal);
                $em->flush();
                return $this->redirect($this->generateUrl("create_remesa", ['proposal' => $proposal->getId()]));
            }
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
     * @Route("/create-remesa/{proposal}", name="create_remesa")
     */
    public function createRemesaAction($proposal, Request $request)
    {
        $remesaModel = new RemesaModel();
        $remesaModel->setProposal($proposal);
        $remesaModel->setEmision(new \DateTime());
        $remesaModel->setState(CalculatorModel::CLOSE);
        $remesaCalculadora = new RemesaCalculadoraModel();
        $remesaCalculadora->setVencimiento(new \DateTime());
        $remesaCalculadora->setFormalizacion(new \DateTime());
        $remesaModel->addCalculadora($remesaCalculadora);
        $form = $this->createForm(RemesaType::class, $remesaModel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var RemesaModel $remesa */
            $remesa = $form->getData();
            $em = $this->getDoctrine()->getManager();
            /** @var RemesaCalculadoraModel $remesaCalculadora */
            foreach ($remesaModel->getCalculadora() as $remesaCalculadora)
            {
                $calculadora = new Calculator();
                $calculadora->setEmision($remesa->getEmision());
                $calculadora->setPorcentaje(0);
                $calculadora->setExtra(0);
                $calculadora->setIntroduce('tae');
                $calculadora->setIntroduce2('costeFinanciero');
                $calculadora->setFormalizacion($remesaCalculadora->getFormalizacion());
                $calculadora->setVencimiento($remesaCalculadora->getVencimiento());
                $calculadora->setDias($remesaCalculadora->getDias());
                $calculadora->setState($remesa->getState());
                var_dump($remesa->getHonorarios(), $remesa->getTotalCosteFinanciero(), $remesaCalculadora->getCosteFinanciero());
                die;
                $calculadora->setHonorarios($remesa->getHonorarios() * ($remesa->getTotalCosteFinanciero() / $remesaCalculadora->getCosteFinanciero()));
                $calculadora->setBurofax($remesa->getBurofax());
                $calculadora->setOmf($remesa->getOmf());
                $calculadora->setGastos($remesa->getGastos());
                $calculadora->setMensajeria($remesa->getMensajeria());
                $calculadora->setTimbres($remesaCalculadora->getTimbres());
                $calculadora->setNominal($remesaCalculadora->getNominal());
                $calculadora->setNotice($remesa->isNotice());
                $calculadora->setNoticeMessage($remesa->getNoticeMessage());

                $costeFinanciero = new Cost();
                $costeFinanciero->setTae($remesaCalculadora->getTae());
                $costeFinanciero->setTotal($remesaCalculadora->getCosteFinanciero() * 100 / $remesaCalculadora->getNominal());
                $costeFinanciero->setMensual($remesaCalculadora->getTae()/ 12);
                $costeFinanciero->setRetencion(0);
                $costeFinanciero->setCoste($remesaCalculadora->getCosteFinanciero());
                $costeFinanciero->setNominal($remesaCalculadora->getNominal());
                $costeFinanciero->setLiquido($remesaCalculadora->getNominal() - $costeFinanciero->getCoste());
                $costeFinanciero->setRetencionTotal(0);
                $calculadora->setCosteFinanciero($costeFinanciero);


                $costeFinancieroLedser = new Cost();
                $costeFinancieroLedser->setCoste($remesaCalculadora->getCosteFinanciero() + $calculadora->getHonorarios());
                $costeFinancieroLedser->setTae((36000 * $costeFinancieroLedser->getCoste()) / ($remesaCalculadora->getNominal() * $remesaCalculadora->getDias()));

                $costeFinancieroLedser->setTotal($costeFinancieroLedser->getCoste() * 100 / $remesaCalculadora->getNominal());
                $costeFinancieroLedser->setMensual($costeFinancieroLedser->getTae()/ 12);
                $costeFinancieroLedser->setRetencion(0);
                $costeFinancieroLedser->setNominal($remesaCalculadora->getNominal());
                $costeFinancieroLedser->setLiquido($costeFinancieroLedser->getNominal() - $costeFinancieroLedser->getCoste());
                $costeFinancieroLedser->setRetencionTotal(0);
                $calculadora->setCosteFinancieroLedser($costeFinancieroLedser);

                $costeTotal = new Cost();
                $costeTotal->setCoste($costeFinancieroLedser->getCoste() + $calculadora->getHonorarios() + ($remesa->getOmf() + $remesa->getMensajeria() + $remesa->getBurofax() + $remesa->getGastos()) / 4);
                $costeTotal->setTae((36000 * $costeTotal->getCoste()) / ($remesaCalculadora->getDias() * $remesaCalculadora->getNominal()));
                $costeTotal->setTotal($costeTotal->getCoste() * 100/ $remesaCalculadora->getNominal());
                $costeTotal->setMensual($costeTotal->getTae()/ 12);
                $costeTotal->setRetencion(0);
                $costeTotal->setNominal($remesaCalculadora->getNominal());
                $costeTotal->setLiquido($remesaCalculadora->getNominal() - $costeTotal->getCoste());
                $costeTotal->setRetencionTotal(0);
                $calculadora->setCosteTotal($costeTotal);

                $em->persist($calculadora);
                $objProposal = $em->getRepository(Proposal::class)->find($proposal);
                $calculadora->setProposal($objProposal);
                $objProposal->addCalculator($calculadora);
            }

            $em->flush();
            return $this->redirect($this->generateUrl("list_proposal"));

        }
        return $this->render('AppBundle:Proposal:createRemesa.html.twig', ['form' => $form->createView(), 'edit' => true]);
   
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
        $calculator->setHonorarios(0);
        $calculator->setExtra(0);
        $calculator->setPorcentaje(0);
        $calculator->setProposal($this->getDoctrine()->getRepository(Proposal::class)->find($proposal));
        $calculator->setEmision(new \DateTime());
        $calculator->setFormalizacion(new \DateTime());
        $calculator->setVencimiento(new \DateTime("+1 day"));
        $calculator->setCosteFinanciero(new Cost());
        $calculator->setCosteFinancieroLedser(new Cost());
        $calculator->setState(CalculatorModel::CLOSE);
        $calculator->setCosteTotal(new Cost());
        if($request->query->has('drawee')) {
            $calculator->setDrawee($this->getDoctrine()->getRepository(Company::class)->find($request->query->get('drawee')));
        }
        if($request->query->has('state')) {
            $calculator->setState($request->query->get('state'));
        }

        if($request->query->has('formalizacion')) {
            $calculator->setFormalizacion(new \DateTime($request->query->get('formalizacion')));
        }

        if($request->query->has('emision')) {
            $calculator->setEmision(new \DateTime($request->query->get('emision')));
        }

        if($request->query->has('vencimiento')) {
            $calculator->setVencimiento(new \DateTime($request->query->get('vencimiento')));
        }

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

                return $this->redirect($this->generateUrl("create_calculator",['proposal' => $calculator->getProposal()->getId(), 'drawee' => $calculator->getDrawee()->getId(), 'state' => $calculator->getState(), 'vencimiento' => $calculator->getVencimiento()->format("Y-m-d H:i:s"), 'formalizacion' => $calculator->getFormalizacion()->format("Y-m-d H:i:s"), 'emision' => $calculator->getEmision()->format("Y-m-d H:i:s")]));
            }
        }

        return $this->render('AppBundle:Proposal:createCalculator.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/calculator", name="calculator_fake")
     */
    public function calculatorAction(Request $request)
    {
        $form = $this->createForm(CalculatorFakeType::class);
        return $this->render('AppBundle:Proposal:calculator.html.twig', ['form' => $form->createView()]);
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
