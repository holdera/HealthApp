<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlushController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthDetoxBundle:DetoxTypes');

        $query = $repository->createQueryBuilder('f')
            ->where("f.id = :id")
            ->setParameter('id', 3)
            ->getQuery();

        $flush = $query->getResult();

        return $this->render('healthDetoxBundle:flush:flush.html.twig',array('flush'=> $flush));
    }
}
