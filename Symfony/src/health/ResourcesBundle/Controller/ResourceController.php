<?php

namespace health\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResourceController extends Controller
{
    public function showAction()
    {
        return $this->render('healthResourcesBundle:Resource:resource.html.twig');
    }
}
