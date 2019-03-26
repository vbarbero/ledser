<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Calculator;
use AppBundle\Entity\Company;
use AppBundle\Entity\Contact;
use AppBundle\Entity\File;
use AppBundle\Entity\Proposal;
use AppBundle\Form\Model\CompanyFilterModel;
use AppBundle\Form\Model\ContactFilterModel;
use AppBundle\Form\Type\AddFileType;
use AppBundle\Form\Type\CompanyFilterType;
use AppBundle\Form\Type\CompanyType;
use AppBundle\Form\Type\ContactFilterType;
use AppBundle\Form\Type\ContactType;
use AppBundle\Model\CalculatorModel;
use AppBundle\Model\CompanyModel;
use AppBundle\Model\ProposalModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Tests\File\UploadedFileTest;

class CompanyController extends Controller
{

    /**
     * @Route("/list-company", name="list_company")
     */
    public function listAction(Request $request)
    {
        $companyFilterModel = new CompanyFilterModel();
        $form = $this->createForm(CompanyFilterType::class, $companyFilterModel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $companyFilterModel = $form->getData();
            $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->getCompanies($companyFilterModel->getType());
        } else
        {
            $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->getCompanies();
        }
        return $this->render('AppBundle:Company:list.html.twig', ['companies' => $companies, 'form' => $form->createView()]);
    }


    /**
     * @Route("/map", name="map")
     */
    public function mapaAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->getCompaniesMap();
/*foreach($companies as $company ){
	echo $company->getLatitude(). '_ ';
}
die;*/
        return $this->render('AppBundle:Company:map.html.twig', ['companies' => $companies]);
    }

    /**
     * @Route("/list-client", name="list_client")
     */
    public function listClientAction(Request $request)
    {
        $calculators = $this->getDoctrine()->getRepository(Calculator::class)->findAll();
        $proposalGroup = [];
        $now = new \DateTime();
        /** @var Calculator $calculator */
        foreach ($calculators as $calculator)
        {

            if(!$calculator->getProposal()->getCompany()) {
                continue;
            }

            if($calculator->getState() !== CalculatorModel::CLOSE) {
                continue;
            }
            if(!isset($proposalGroup[$calculator->getProposal()->getCompany()->getId()])) {
                $proposalGroup[$calculator->getProposal()->getCompany()->getId()] = [
                    'id' => $calculator->getProposal()->getCompany()->getId(),
                    'name' => $calculator->getProposal()->getCompany()->getName(),
                    'nominal' => 0,
                    'vivo' => 0,
                    'muerto' => 0,
                    'ingreso' => 0,
                    'honorarios' => 0,
                    'num' => 0,
                    'dias' => 0,
                    'tae' => 0,
                    'taeLedser' => 0,
                    'total' => 0,
                ];
            }
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['nominal'] += $calculator->getNominal();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['vivo'] += $calculator->getVencimiento() > $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['muerto'] += $calculator->getVencimiento() <= $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['ingreso'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['honorarios'] += $calculator->getHonorarios();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['num'] += 1;
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['dias'] += $calculator->getDias();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['tae'] += $calculator->getCosteFinanciero()->getTae();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['taeLedser'] += $calculator->getCosteFinancieroLedser()->getTae();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['coste'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['costeLedser'] += $calculator->getCosteFinancieroLedser()->getCoste();
            $proposalGroup[$calculator->getProposal()->getCompany()->getId()]['total'] += $calculator->getCosteTotal()->getTotal();
            uksort($proposalGroup, function ($ak, $bk) use ($proposalGroup) {
                $a = $proposalGroup[$ak];
                $b = $proposalGroup[$bk];
                if ($a['honorarios'] === $b['honorarios']) return $ak - $bk;
                return $a['honorarios'] > $b['honorarios'] ? 1 : -1;
            });

        }
        return $this->render('AppBundle:Company:clients.html.twig', ['proposalGroup' => $proposalGroup]);
    }
    /**
     * @Route("/list-drawee", name="list_drawee")
     */
    public function listDraweeAction(Request $request)
    {
        $calculators = $this->getDoctrine()->getRepository(Calculator::class)->findAll();
        $proposalGroup = [];
        $now = new \DateTime();
        /** @var Calculator $calculator */
        foreach ($calculators as $calculator)
        {

            if(!$calculator->getDrawee()) {
                continue;
            }

            if($calculator->getState() !== CalculatorModel::CLOSE) {
                continue;
            }
            if(!isset($proposalGroup[$calculator->getDrawee()->getId()])) {
                $proposalGroup[$calculator->getDrawee()->getId()] = [
                    'id' => $calculator->getDrawee()->getId(),
                    'rating' => $calculator->getDrawee()->getRating(),
                    'name' => $calculator->getDrawee()->getName(),
                    'nominal' => 0,
                    'vivo' => 0,
                    'muerto' => 0,
                    'ingreso' => 0,
                    'honorarios' => 0,
                    'num' => 0,
                    'dias' => 0,
                    'tae' => 0,
                    'taeLedser' => 0,
                    'total' => 0,
                ];
            }
            $proposalGroup[$calculator->getDrawee()->getId()]['nominal'] += $calculator->getNominal();
            $proposalGroup[$calculator->getDrawee()->getId()]['vivo'] += $calculator->getVencimiento() > $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getDrawee()->getId()]['muerto'] += $calculator->getVencimiento() <= $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getDrawee()->getId()]['ingreso'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getDrawee()->getId()]['honorarios'] += $calculator->getHonorarios();
            $proposalGroup[$calculator->getDrawee()->getId()]['num'] += 1;
            $proposalGroup[$calculator->getDrawee()->getId()]['dias'] += $calculator->getDias();
            $proposalGroup[$calculator->getDrawee()->getId()]['tae'] += $calculator->getCosteFinanciero()->getTae();
            $proposalGroup[$calculator->getDrawee()->getId()]['taeLedser'] += $calculator->getCosteFinancieroLedser()->getTae();
            $proposalGroup[$calculator->getDrawee()->getId()]['total'] += $calculator->getCosteTotal()->getTotal();
            $proposalGroup[$calculator->getDrawee()->getId()]['coste'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getDrawee()->getId()]['costeLedser'] += $calculator->getCosteFinancieroLedser()->getCoste();

            uksort($proposalGroup, function ($ak, $bk) use ($proposalGroup) {
                $a = $proposalGroup[$ak];
                $b = $proposalGroup[$bk];
                if ($a['nominal'] === $b['nominal']) return $ak - $bk;
                return $a['nominal'] > $b['nominal'] ? 1 : -1;
            });
        }
        //$companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::DRAWEE], ['name' => 'ASC']);
        return $this->render('AppBundle:Company:clients.html.twig', ['proposalGroup' => $proposalGroup, 'drawee' => true]);
    }

    /**
     * @Route("/list-finantial", name="list_finantial")
     */
    public function listFinantialAction(Request $request)
    {
        $calculators = $this->getDoctrine()->getRepository(Calculator::class)->findAll();
        $proposalGroup = [];
        $now = new \DateTime();
        /** @var Calculator $calculator */
        foreach ($calculators as $calculator)
        {

            if(!$calculator->getProposal()->getFinalcial()) {
                continue;
            }

            if($calculator->getState() !== CalculatorModel::CLOSE) {
                continue;
            }
            if(!isset($proposalGroup[$calculator->getProposal()->getFinalcial()->getId()])) {
                $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()] = [
                    'id' => $calculator->getProposal()->getFinalcial()->getId(),
                    'name' => $calculator->getProposal()->getFinalcial()->getName(),
                    'nominal' => 0,
                    'vivo' => 0,
                    'muerto' => 0,
                    'ingreso' => 0,
                    'honorarios' => 0,
                    'num' => 0,
                    'dias' => 0,
                    'tae' => 0,
                    'taeLedser' => 0,
                    'total' => 0,
                ];
            }
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['nominal'] += $calculator->getNominal();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['vivo'] += $calculator->getVencimiento() > $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['muerto'] += $calculator->getVencimiento() <= $now?$calculator->getNominal():0;
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['ingreso'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['honorarios'] += $calculator->getHonorarios();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['num'] += 1;
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['dias'] += $calculator->getDias();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['tae'] += $calculator->getCosteFinanciero()->getTae();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['taeLedser'] += $calculator->getCosteFinancieroLedser()->getTae();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['total'] += $calculator->getCosteTotal()->getTotal();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['coste'] += $calculator->getCosteFinanciero()->getCoste();
            $proposalGroup[$calculator->getProposal()->getFinalcial()->getId()]['costeLedser'] += $calculator->getCosteFinancieroLedser()->getCoste();
            uksort($proposalGroup, function ($ak, $bk) use ($proposalGroup) {
                $a = $proposalGroup[$ak];
                $b = $proposalGroup[$bk];
                if ($a['honorarios'] === $b['honorarios']) return $ak - $bk;
                return $a['honorarios'] > $b['honorarios'] ? 1 : -1;
            });
        }
        return $this->render('AppBundle:Company:clients.html.twig', ['proposalGroup' => $proposalGroup]);
    }

    /**
     * @Route("/list-freed", name="list_freed")
     */
    public function listFreedAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::FREED], ['name' => 'ASC']);
        return $this->render('AppBundle:Company:list.html.twig', ['companies' => $companies]);
    }

    /**
     * @Route("/list-proponent", name="list_proponent")
     */
    public function listProponentAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::PROPONENT], ['name' => 'ASC']);
        return $this->render('AppBundle:Company:list.html.twig', ['companies' => $companies]);
    }

    /**
     * @Route("/list-files/{company}", name="list_files")
     */
    public function listFilesAction(Company $company, Request $request)
    {
        $files = $this->getDoctrine()->getManager()->getRepository(File::class)->findBy(['company' => $company]);
        return $this->render('AppBundle:Company:files.html.twig', ['company' => $company, 'files' => $files]);
    }


    /**
     * @Route("/delete-contact/{contact}", name="delete_contact")
     */
    public function deleteContactAction(Contact $contact, Request $request)
    {
        $this->getDoctrine()->getManager()->remove($contact);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl("list_contact"));
    }


    /**
     * @Route("/list-contact", name="list_contact")
     */
    public function listContactAction(Request $request)
    {
        $contactFilterModel = new ContactFilterModel();
        $form = $this->createForm(ContactFilterType::class, $contactFilterModel);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFilterModel = $form->getData();
            $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findBy(['company' => $contactFilterModel->getCompany()]);
        } else
        {
            $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findAll();

        }
        return $this->render('AppBundle:Company:contact.html.twig', ['contacts' => $contacts, 'form' => $form->createView()]);
    }




    /**
     * @Route("/create-company", name="create_company")
     */
    public function createAction(Request $request)
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->add('saveAndAdd', SubmitType::class, array('label' => 'Save and Add Contact'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();
            $em = $this->getDoctrine()->getManager();
//dump($company->getType()); die;
            $em->persist($company);
            $em->flush();
            if ($form->getClickedButton() && 'save' === $form->getClickedButton()->getName()) {
                return $this->redirect($this->generateUrl("list_company"));
            }
            else {
                return $this->redirect($this->generateUrl("create_contact", ['company' => $company->getId()]));
            }
        }
        return $this->render('AppBundle:Company:index.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit-company/{company}", name="edit_company")
     */
    public function editAction(Company $company, Request $request)
    {
        $form = $this->createForm(CompanyType::class, $company);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->add('saveAndAdd', SubmitType::class, array('label' => 'Save and Add Contact'));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();
var_dump($company);
var_dump($request->request);
die;

            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            return $this->redirect($this->generateUrl("list_company"));
        }
        return $this->render('AppBundle:Company:index.html.twig', ['form' => $form->createView()]);
    }


    /**
     * @Route("/add-file/{company}", name="add_file")
     */
    public function addFileAction(Company $company, Request $request)
    {
        $file = new File();
        $file->setCompany($company);
        $form = $this->createForm(AddFileType::class, $file);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $archive */
            $archive = $file->getSource();

            $fileName = md5(uniqid()).'.'.$archive->guessExtension();

                // moves the file to the directory where brochures are stored
            $archive->move(
                    $this->getParameter('path'),
                    $fileName
                );

                // updates the 'brochure' property to store the PDF file name
                // instead of its contents
            $file->setSource($fileName);



            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();
            return $this->redirect($this->generateUrl("list_client"));
        }
        return $this->render('AppBundle:Company:addFile.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/delete-company/{company}", name="delete_company")
     */
    public function deleteAction(Company $company, Request $request)
    {
        $this->getDoctrine()->getManager()->remove($company);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl("list_company"));
    }

    /**
     * @Route("/delete-file/{file}", name="delete_file")
     */
    public function deleteFileAction(File $file, Request $request)
    {
        $company = $file->getCompany();
        $this->getDoctrine()->getManager()->remove($file);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($this->generateUrl("list_files",['company' => $company->getId()]));
    }

    /**
     * @Route("/create-contact/{company}", name="create_contact")
     */
    public function createContactAction($company = null, Request $request)
    {
        $contact = new Contact();
        if($company) {
            /** @var Company $company */
            $company = $this->getDoctrine()->getManager()->getRepository(Company::class)->find($company);
            $contact->setCompany($company);
        }
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->redirect("show-company/" . $contact->getCompany()->getId());
        }
        return $this->render('AppBundle:Company:createContact.html.twig', ['form' => $form->createView()]);
    }

    /**
    @Route("/edit-contact/{contact}", name="edit_contact")
     */
    public function editContactAction(Contact $contact, Request $request)
    {
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->redirect($this->generateUrl("list_contact"));
        }
        return $this->render('AppBundle:Company:createContact.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/show-company/{id}", name="show_company")
     */
    public function showAction($id, Request $request)
    {
        $company = $this->getDoctrine()->getManager()->getRepository(Company::class)->find($id);
        $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findBy(['company' => $company]);
        return $this->render('AppBundle:Company:show.html.twig', ['company' => $company, 'contacts' => $contacts]);
    }
}

