<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\healthUserBundle\Entity;
use Symfony\Component\HttpFoundation\Response;

class NavigationController extends Controller
{
    public function showAction()
    {

        //  $repository = $this->getDoctrine()
        //   ->getRepository('healthhealthUserBundle:Navigation');

        //   $Navigation = $repository->findBy(
        //         array('name' => 'Login')


        //  exit(\Doctrine\Common\Util\Debug::dump($Navigation));


        return $this->render('healthhealthUserBundle:Default:index.html.twig');


    }
}
