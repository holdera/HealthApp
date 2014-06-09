<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository=$this->getDoctrine()
            ->getRepository('healthDetoxBundle:DetoxQuestions');

        $q1 = $repository->createQueryBuilder('a')
            ->where("a.dqId = :dqId")
            ->setParameter('dqId', 1)
            ->getQuery();

        $ques1 = $q1->getResult();

        $q2 = $repository->createQueryBuilder('b')
            ->where("b.dqId = :dqId")
            ->setParameter('dqId', 2)
            ->getQuery();

        $ques2 = $q2->getResult();

        $q3 = $repository->createQueryBuilder('c')
            ->where("c.dqId = :dqId")
            ->setParameter('dqId', 3)
            ->getQuery();

        $ques3 = $q3->getResult();

       $q4 = $repository->createQueryBuilder('d')
           ->where("d.dqId = :dqId")
           ->setParameter('dqId', 4)
           ->getQuery();

        $ques4 = $q4->getResult();

        $q5 = $repository->createQueryBuilder('e')
            ->where("e.dqId = :dqId")
            ->setParameter('dqId', 5)
            ->getQuery();

        $ques5 = $q5->getResult();

        $q6 = $repository->createQueryBuilder('f')
            ->where("f.dqId = :dqId")
            ->setParameter('dqId', 6)
            ->getQuery();

        $ques6 = $q6->getResult();

        return $this->render('healthDetoxBundle:Detox:detox.html.twig', array('question'=> $ques1,
            'question2'=>$ques2, 'question3'=>$ques3, 'question4'=>$ques4, 'question5'=>$ques5,
            'question6'=>$ques6));
    }
}
