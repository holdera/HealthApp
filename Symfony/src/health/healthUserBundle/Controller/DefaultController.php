<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('healthhealthUserBundle:Default:index.html.twig');
    }
}
