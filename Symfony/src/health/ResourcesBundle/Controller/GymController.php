<?php

namespace health\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GymController extends Controller
{
    public function showAction()
    {
        return $this->render('healthResourcesBundle:Gym:finder.html.twig');
    }

}