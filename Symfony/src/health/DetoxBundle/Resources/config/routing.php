<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('health_detox_homepage', new Route('/hello/{name}', array(
    '_controller' => 'healthDetoxBundle:Default:index',
)));

return $collection;
