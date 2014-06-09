<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VeganController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthDetoxBundle:DetoxTypes');

        $query = $repository->createQueryBuilder('a')
            ->where("a.id = :id")
            ->setParameter('id', 1)
            ->getQuery();

        $vegan = $query->getResult();

        return $this->render('healthDetoxBundle:vegan:vegan.html.twig', array('vegan'=>$vegan));
    }
}
