<?php

namespace health\healthUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function showAction()
    {
        $navigation = $this->getDoctrine()
            ->getRepository('healthUserBundle')
            ->find(id);


    if(!$navigation)
        {
            throw $this->createNotFoundException('no navigation');
        }
    }
}
