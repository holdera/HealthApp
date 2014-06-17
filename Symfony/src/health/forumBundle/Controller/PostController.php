<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthDetoxBundle:detoxQuestions');

        $ques = $repository->findAll();

        return $this->render('healthDetoxBundle:Detox:detox.html.twig', array('questions'=> $ques));
    }
}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-17
 * Time: 3:36 AM
 */ 