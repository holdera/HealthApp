<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SampleController extends Controller
{
    public function showAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('healthLifestyleBundle:Diet');

        //$Diet = $repository->findAll();

        $query = $repository->createQueryBuilder('b')
            ->where("b.id = :id")
            ->setParameter('id', 3)
            ->getQuery();

        $diet = $query->getResult();


        $q2 = $repository->createQueryBuilder('s')
                        ->where("s.id = :id")
                        ->setParameter('id', 2)
                        ->getQuery();
        $snacks = $q2->getResult();

        $q3 = $repository->createQueryBuilder('l')
            ->where("l.id = :id")
            ->setParameter('id', 4)
            ->getQuery();
        $lunch = $q3->getResult();

        $q4 = $repository->createQueryBuilder('d')
            ->where("d.id = :id")
            ->setParameter('id', 5)
            ->getQuery();
        $dinner = $q4->getResult();


        return $this->render('healthLifestyleBundle:healthSample:sample.html.twig',
        array('life' =>$diet, 'snack'=>$snacks, 'lunch'=> $lunch, 'dinner'=>$dinner));
    }

}
