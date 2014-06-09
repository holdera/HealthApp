<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetoxController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
                    ->getRepository('healthDetoxBundle:detoxQuestions');

        $ques = $repository->findAll();

        return $this->render('healthDetoxBundle:Detox:detox.html.twig', array('questions'=> $ques));
    }
}
