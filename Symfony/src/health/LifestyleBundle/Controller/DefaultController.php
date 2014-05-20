<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('healthLifestyleBundle:Default:index.html.twig', array('name' => $name));
    }
}
