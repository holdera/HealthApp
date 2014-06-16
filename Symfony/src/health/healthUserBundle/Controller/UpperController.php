<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UpperController extends Controller
{
    public function showAction()
    {
        $repo = $this->getDoctrine()
            ->getRepository('healthhealthUserBundle:Exercises');

        $query = $repo->createQueryBuilder('u')
            ->where("u.id = :id")
            ->setParameter('id', 2)
            ->getQuery();

        $up = $query->getResult();

        return $this->render('healthhealthUserBundle:Upper:upperbody.html.twig', array('up'=>$up));
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-15
 * Time: 11:05 PM
 */ 