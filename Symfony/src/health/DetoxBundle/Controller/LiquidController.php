<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LiquidController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthDetoxBundle:DetoxTypes');

        $query = $repository->createQueryBuilder('l')
            ->where("l.id = :id")
            ->setParameter('id', 1)
            ->getQuery();

        $liquid = $query->getResult();

        return $this->render('healthDetoxBundle:liquid:liquid.html.twig', array('liquid'=>$liquid));
    }
}
