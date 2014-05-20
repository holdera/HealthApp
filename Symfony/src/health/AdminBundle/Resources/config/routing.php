<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('health_admin_homepage', new Route('/hello/{name}', array(
    '_controller' => 'healthAdminBundle:Default:index',
)));

return $collection;
