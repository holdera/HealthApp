<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LifeController extends Controller
{
    public function showAction()
    {
        return $this->render('healthhealthUserBundle:Lifestyle:lifestyle.html.twig');
    }

}

/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-05-13
 * Time: 3:49 PM
 */ 