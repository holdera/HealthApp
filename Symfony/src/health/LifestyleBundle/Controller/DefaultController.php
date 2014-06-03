<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\LifestyleBundle\Entity;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
          ->getRepository('healthLifestyleBundle:Diet');

         //$Diet = $repository->findAll();

        $query = $repository->createQueryBuilder('d')
                ->where("d.id = :id")
                ->setParameter('id', 1)
                ->getQuery();

        $life = $query->getResult();




        return $this->render('healthLifestyleBundle:Lifestyle:lifestyle.html.twig', array('diet' =>$life));
    }


}
