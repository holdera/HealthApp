<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LowerController extends Controller
{
    public function showAction()
    {
        $repo = $this->getDoctrine()
            ->getRepository('healthhealthUserBundle:Exercises');

        $query = $repo->createQueryBuilder('l')
            ->where("l.id = :id")
            ->setParameter('id', 1)
            ->getQuery();

        $low = $query->getResult();

        return $this->render('healthhealthUserBundle:Lower:lowerbody.html.twig', array('low'=>$low));
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 5:10 AM
 */ 