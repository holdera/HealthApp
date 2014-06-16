<?php

namespace health\forumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class forumController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthforumBundle:forum');

        $posts=$repository->findAll();

        return $this->render('healthforumBundle:Forum:Forum.html.twig', array('posts'=>$posts));
    }
}
