<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GreensController extends Controller
{
    public function showAction()
    {
        return $this->render('healthLifestyleBundle:Greens:greens.html.twig');
    }

}
