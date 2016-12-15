<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/registration", name="registration")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:registration:index.html.twig');
    }
}
