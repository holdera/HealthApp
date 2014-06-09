<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlushController extends Controller
{
    public function showAction()
    {

        return $this->render('healthDetoxBundle:flush:flush.html.twig');
    }
}
