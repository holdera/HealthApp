<?php

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('healthuserBundle:Default:index.html.twig', array('name' => $name));
    }
}
