<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function showAction()
    {
        return $this->render('healthhealthUserBundle:Lifestyle:lifestyle.html.twig');
        }

}
