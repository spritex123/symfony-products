<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductsController extends Controller
{
    /**
     * @Route("/products", name="products")
     */
    public function productsAction(Request $request)
    {
        return $this->render('AppBundle:products:index.html.twig');
    }
}
