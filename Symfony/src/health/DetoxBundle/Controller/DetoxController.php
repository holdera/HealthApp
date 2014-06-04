<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetoxController extends Controller
{
    public function showAction()
    {
        return $this->render('healthDetoxBundle:Detox:detox.html.twig');
    }
}
