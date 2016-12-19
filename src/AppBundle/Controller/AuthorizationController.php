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
    public function authorizationAction(Request $request)
    {
        $authorization = new User();
        $authorization->setEmail('admin@mail.com');
        $authorization->setPassword('123');

        $form = $this->createForm(AuthorizationType::class, $authorization);

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('homepage'));
            }
        }

        return $this->render('AppBundle:authorization:index.html.twig', [
            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
    /*public function authorizationAction(Request $request)
    {
        $authorization = new User();
        $authorization->setEmail('admin@mail.com');
        $authorization->setPassword('123');

        $form = $this->createForm(AuthorizationType::class, $authorization);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('homepage'));
            }
        }

        return $this->render('AppBundle:authorization:index.html.twig', ['form' => $form->createView()]);
    }*/

    /**
     * @Route("/authorization_check", name="authorization_check")
     */
    public function authorizationCheckAction()
    {
        // should never get here
        // AccessDeniedException выбрасывается, когда учетная запись не имеет требуемую роль
        throw new AccessDeniedException();
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        // should never get here
        throw new AccessDeniedException();
    }
}
