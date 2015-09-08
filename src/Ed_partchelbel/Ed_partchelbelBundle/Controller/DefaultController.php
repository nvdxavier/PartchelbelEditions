<?php

namespace Ed_partchelbel\Ed_partchelbelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Ed_partchelbelBundle:Default:index.html.twig');
    }

    public function firstTestAction($id)
    {
    return $this->render('Ed_partchelbelBundle:Default:first.html.twig', array('id' => $id));
    }

    public function secondTestAction()
    {
    return $this->render('Ed_partchelbelBundle:Default:second.html.twig');
    }

    public function thirdTestAction($id)
    {
        return $this->render('Ed_partchelbelBundle:Default:third.html.twig', array('id' => $id));
    }
}
