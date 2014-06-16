<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MidsectionController extends Controller
{
    public function showAction()
    {
        $repo = $this->getDoctrine()
            ->getRepository('healthhealthUserBundle:Exercises');

        $query = $repo->createQueryBuilder('m')
            ->where("m.id = :id")
            ->setParameter('id', 3)
            ->getQuery();

        $mid = $query->getResult();

        return $this->render('healthhealthUserBundle:Midsection:abs.html.twig', array('mid'=>$mid));
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 5:10 AM
 */ 