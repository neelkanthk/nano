<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('welcome', new Route('/', array(
    'year' => null,
    '_controller' => 'Application\Controllers\Welcome::indexAction',
)));

return $routes;
