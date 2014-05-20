<?php

namespace health\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('healthResourcesBundle:Default:index.html.twig', array('name' => $name));
    }
}
