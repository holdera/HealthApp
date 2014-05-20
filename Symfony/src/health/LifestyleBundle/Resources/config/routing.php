<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('health_lifestyle_homepage', new Route('/hello/{name}', array(
    '_controller' => 'healthLifestyleBundle:Default:index',
)));

return $collection;
