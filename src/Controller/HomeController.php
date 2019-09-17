<?php

declare(strict_types=1);

namespace Pronko\App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class HomeController
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('<h1>Hello World</h1><a href="/about">About Us</a>');
        return $response;
    }
}
