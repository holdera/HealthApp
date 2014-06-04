<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\LifestyleBundle\Entity;

class LifestyleController extends Controller
{
    public function showAction()
    {
        return $this->render('healthLifestyleBundle:Lifestyle:sample.html.twig');
    }

}
