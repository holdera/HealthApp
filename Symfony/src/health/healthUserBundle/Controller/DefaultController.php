<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\healthUserBundle\Entity;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {




        return $this->render('healthhealthUserBundle:Default:index.html.twig');


    }
}
