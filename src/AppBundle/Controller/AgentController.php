<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Agent;
use AppBundle\Entity\File;
use AppBundle\Entity\Proposal;
use AppBundle\Form\Type\AddFileType;
use AppBundle\Form\Type\AgentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Tests\File\UploadedFileTest;

class AgentController extends Controller
{
    /**
     * @Route("/list-agent", name="list_agent")
     */
    public function listAction(Request $request)
    {
        $agents = $this->getDoctrine()->getRepository(Agent::class)->findAll();
        return $this->render('AppBundle:Agent:list.html.twig', ['agents' => $agents]);

    }

    /**
     * @Route("/list-files/{agent}", name="list_files_agent")
     */
    public function listFilesAction(Agent $agent, Request $request)
    {
        $files = $this->getDoctrine()->getManager()->getRepository(File::class)->findBy(['agent' => $agent]);
        return $this->render('AppBundle:Agent:files.html.twig', ['agent' => $agent, 'files' => $files]);
    }

    /**
     * @Route("/create-agent", name="create_agent")
     */
    public function createAction(Request $request)
    {
        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $agent = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($agent);
            $em->flush();
            return $this->redirect($this->generateUrl("list_agent"));
        }
        return $this->render('AppBundle:Agent:index.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/edit-agent/{agent}", name="edit_agent")
     */
    public function editAction(Agent $agent, Request $request)
    {
        $form = $this->createForm(AgentType::class, $agent);
        $form->add('save', SubmitType::class, array('label' => 'Save'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $agent = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($agent);
            $em->flush();
            return $this->redirect($this->generateUrl("list_agent"));
        }
        return $this->render('AppBundle:Agent:index.html.twig', ['form' => $form->createView()]);
    }


    /**
     * @Route("/add-file-agent/{agent}", name="add_file_agent")
     */
    public function addFileAction(Agent $agent, Request $request)
    {
        $file = new File();
        $file->setAgent($agent);
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
            return $this->redirect($this->generateUrl("list_agent"));
        }
        return $this->render('AppBundle:Agent:addFile.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/delete-agent/{agent}", name="delete_agent")
     */
    public function deleteAction(Agent $agent, Request $request)
    {
        $this->getDoctrine()->getManager()->remove($agent);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl("list_agent"));
    }

    /**
     * @Route("/delete-file-agent/{file}", name="delete_file_agent")
     */
    public function deleteFileAction(File $file, Request $request)
    {
        $agent = $file->getAgent();
        $this->getDoctrine()->getManager()->remove($file);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($this->generateUrl("list_files_agent",['agent' => $agent->getId()]));
    }

    /**
     * @Route("/show-agent/{id}", name="show_agent")
     */
    public function showAction($id, Request $request)
    {
        $agent = $this->getDoctrine()->getManager()->getRepository(Agent::class)->find($id);
        return $this->render('AppBundle:Agent:show.html.twig', ['agent' => $agent]);
    }
}

