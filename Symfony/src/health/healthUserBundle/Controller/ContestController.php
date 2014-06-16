<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContestController extends Controller
{
    public function showAction()
    {


        return $this->render('healthhealthUserBundle:Contest:contest.html.twig');
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 9:16 AM
 */ 