<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\healthUserBundle\Entity;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('healthhealthUserBundle:Navigation');

        $nav = $this->getDoctrine()->getManager();
        $query = $nav->createQuery(
            'SELECT n FROM healthhealthUserBundle:Navigation n'
        );

        $navigation = $query->getResult();

        return $this->render('healthhealthUserBundle:Default:index.html.twig');


    }
}
