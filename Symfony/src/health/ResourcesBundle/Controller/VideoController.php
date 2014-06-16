<?php

namespace health\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthResourcesBundle:Video');

        $query = $repository->createQueryBuilder('c')
            ->where("c.id = :id")
            ->setParameter('id', 1)
            ->getQuery();

        $cardio = $query->getResult();

        $query2 = $repository->createQueryBuilder('t')
            ->where("t.id = :id")
            ->setParameter('id', 3)
            ->getQuery();

        $tone = $query2->getResult();

        $query3 = $repository->createQueryBuilder('i')
            ->where("i.id = :id")
            ->setParameter('id', 5)
            ->getQuery();

        $intense = $query3->getResult();

        return $this->render('healthResourcesBundle:Video:videos.html.twig', array('cardio' => $cardio,
            'tone'=> $tone, 'intense'=>$intense));
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 12:49 PM
 */ 