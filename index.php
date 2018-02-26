<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Nano\Framework;
use Nano\NanoRequest as Request;
use Symfony\Component\EventDispatcher\EventDispatcher;

$request = Request::createFromGlobals();

$routes = include __DIR__ . '/src/routes.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);

$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();
//$dispatcher = new EventDispatcher();
//Event listener 1
//$dispatcher->addSubscriber(new \Application\Hooks\Example1);
//Event listener 2
//$dispatcher->addSubscriber(new \Application\Hooks\Example2);
//$nano = new Framework($dispatcher, $matcher, $controllerResolver, $argumentResolver);
$nano = new Framework($matcher, $controllerResolver, $argumentResolver);
$response = $nano->handle($request);
//$response->prepare($request);
//$response->send();
