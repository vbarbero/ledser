<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Form\Type\CompanyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function listAction(Request $request)
    {
        return $this->redirect('login');
    }
}
