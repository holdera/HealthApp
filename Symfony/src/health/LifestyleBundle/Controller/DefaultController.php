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

        $Diet = $repository->findAll();

        exit(\Doctrine\Common\Util\Debug::dump($Diet));

        return $this->render('healthLifestyleBundle:Lifestyle:lifestyle.html.twig');
    }


}
