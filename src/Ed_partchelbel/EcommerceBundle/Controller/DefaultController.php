<?php

namespace Ed_partchelbel\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EcommerceBundle:Default:index.html.twig', array('name' => $name));
    }
}
