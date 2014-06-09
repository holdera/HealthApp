<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LiquidController extends Controller
{
    public function showAction()
    {

        return $this->render('healthDetoxBundle:liquid:liquid.html.twig');
    }
}
