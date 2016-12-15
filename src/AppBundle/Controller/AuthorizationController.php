<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;
use AppBundle\Form\AuthorizationType;

class AuthorizationController extends Controller
{
    /**
     * @Route("/authorization", name="authorization")
     */
    public function indexAction(Request $request)
    {
        $authorization = new User();
        $authorization->setEmail('EMAIL');

        $form = $this->createForm(AuthorizationType::class, $authorization);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('homepage'));
            }
        }

        return $this->render('AppBundle:authorization:index.html.twig', ['form' => $form->createView()]);
    }
}
