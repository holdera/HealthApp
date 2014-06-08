<?php

namespace health\DetoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetoxController extends Controller
{
    public function showAction()
    {
        $repository=$this->getDoctrine()
                    ->getRepository('healthDetoxBundle');

        $query = $repository->createQueryBuilder('dt')
                ->where('dq_id : dt.id' )
                ->getQuery();

        $detox = $query->getResult();

        return $this->render('healthDetoxBundle:Detox:detox.html.twig', array('questions' => $detox));
    }
}
