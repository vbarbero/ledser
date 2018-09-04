<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Entity\Contact;
use AppBundle\Entity\File;
use AppBundle\Form\Type\AddFileType;
use AppBundle\Form\Type\CompanyType;
use AppBundle\Form\Type\ContactType;
use AppBundle\Model\CompanyModel;
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
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findAll();
        return $this->render('AppBundle:Company:list.html.twig', ['companies' => $companies]);
    }
    /**
     * @Route("/list-client", name="list_client")
     */
    public function listClientAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::CLIENT]);
        return $this->render('AppBundle:Company:clients.html.twig', ['companies' => $companies]);
    }
    /**
     * @Route("/list-drawee", name="list_drawee")
     */
    public function listDraweeAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::DRAWEE]);
        return $this->render('AppBundle:Company:clients.html.twig', ['companies' => $companies]);
    }
    /**
     * @Route("/list-finantial", name="list_finantial")
     */
    public function listFinantialAction(Request $request)
    {
        $companies = $this->getDoctrine()->getManager()->getRepository(Company::class)->findBy(['type' => CompanyModel::FINANTIAL]);
        return $this->render('AppBundle:Company:clients.html.twig', ['companies' => $companies]);
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
     * @Route("/create-company", name="create_company")
     */
    public function createAction(Request $request)
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->add('saveAndAdd', SubmitType::class, array('label' => 'Save and Add'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();
            $em = $this->getDoctrine()->getManager();
//dump($company->getType()); die;
            $em->persist($company);
            $em->flush();
            if ($form->getClickedButton() && 'save' === $form->getClickedButton()->getName()) {
                return $this->redirect($this->generateUrl("list_company");
            }
            else {
                return $this->redirect($this->generateUrl("create_contact");
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

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();
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
     * @Route("/create-contact", name="create_contact")
     */
    public function createContactAction(Request $request)
    {
        $contact = new Contact();
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
     * @Route("/show-company/{id}", name="show_company")
     */
    public function showAction($id, Request $request)
    {
        $company = $this->getDoctrine()->getManager()->getRepository(Company::class)->find($id);
        $contacts = $this->getDoctrine()->getManager()->getRepository(Contact::class)->findBy(['company' => $company]);
        return $this->render('AppBundle:Company:show.html.twig', ['company' => $company, 'contacts' => $contacts]);
    }
}

