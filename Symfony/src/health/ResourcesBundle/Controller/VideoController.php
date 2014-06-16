<?php

namespace health\ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideoController extends Controller
{
    public function showAction()
    {
        return $this->render('healthResourcesBundle:Video:videos.html.twig');
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 12:49 PM
 */ 