<?php

namespace health\forumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class forumController extends Controller
{
    public function showAction()
    {
        return $this->render('healthforumBundle:Forum:Forum.html.twig');
    }
}
