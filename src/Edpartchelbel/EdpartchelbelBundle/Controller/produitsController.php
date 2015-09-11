<?php

namespace Edpartchelbel\EdpartchelbelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EdpartchelbelBundle:Default:produits/layout/produits.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('EdpartchelbelBundle:Default:produits/layout/presentation.html.twig');
    }
}
