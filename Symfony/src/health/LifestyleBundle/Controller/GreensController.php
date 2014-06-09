<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GreensController extends Controller
{
    public function showAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('healthLifestyleBundle:Greens');

        //$Diet = $repository->findAll ();

        $query = $repository->createQueryBuilder('g')
            ->where("g.id = :id")
            ->setParameter('id', 1)
            ->getQuery();

        $green = $query->getResult();

        $q2 = $repository->createQueryBuilder('gr')
            ->where("gr.id = :id")
            ->setParameter('id', 2)
            ->getQuery();

        $green2 = $q2->getResult();

        $q3 = $repository->createQueryBuilder('gre')
            ->where("gre.id = :id")
            ->setParameter('id', 3)
            ->getQuery();

        $green3 = $q3->getResult();

        $repo = $this->getDoctrine()
            ->getRepository('healthLifestyleBundle:Greenlinks');

        $link = $repo->findAll();

        //$green = $query->getResult();

        return $this->render('healthLifestyleBundle:Greens:greens.html.twig',
            array('greens'=>$green, 'spinach'=>$green2, 'collards'=>$green3, 'glink'=>$link));
    }

}
