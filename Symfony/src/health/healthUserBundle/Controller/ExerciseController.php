<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExerciseController extends Controller
{
    public function showAction()
    {
        $repo=$this->getDoctrine()
            ->getRepository('healthhealthUserBundle:Exercises');

        $all = $repo->findAll();

        return $this->render('healthhealthUserBundle:Exercises:exercises.html.twig', array('all'=>$all));
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-05-13
 * Time: 8:12 PM
 */ 