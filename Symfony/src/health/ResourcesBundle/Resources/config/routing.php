<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('health_resources_homepage', new Route('/hello/{name}', array(
    '_controller' => 'healthResourcesBundle:Default:index',
)));

return $collection;
