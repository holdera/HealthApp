<?php

namespace health\forumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;

class CreateController extends Controller
{
    public function showAction()
    {

        return $this->render('healthforumBundle:Create:create.html.twig');
    }
/*
    public function createAction(){


        $forum = new Post();
        $forum->setTitle(['topic']);
        $forum->setContent(['content']);
        $forum->setAuthor('Anonymous');

        $em = $this->getDoctrine()->getManager();
        $em->persist($forum);
        $em->flush();

        return new Response('Thanks for posting');
    }*/
}

/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 8:33 AM
 */ 