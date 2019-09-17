<?php

declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router = new League\Route\Router;

// map a route
$router->map('GET', '/', \Pronko\App\Controller\HomeController::class);
$router->map('GET', '/about', \Pronko\App\Controller\AboutController::class);
$router->map('GET', '/task/{id:\d+}', \Pronko\App\Controller\TaskController::class);

$response = $router->dispatch($request);

// send the response to the browser
(new Zend\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);