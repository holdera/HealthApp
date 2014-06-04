<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheatController extends Controller
{
    public function showAction()
    {
        return $this->render('healthLifestyleBundle:Cheat:cheatGenerator.html.twig');
    }

}
