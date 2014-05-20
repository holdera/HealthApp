<?php

namespace health\LifestyleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use health\LifestyleBundle\Entity;

class LifestyleController extends Controller
{
    public function showAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('healthLifestyleBundle:Diet');

        $Diet = $repository->findAll();
        exit(\Doctrine\Common\Util\Debug::dump($Diet));

    }
}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-05-20
 * Time: 12:42 PM
 */ 