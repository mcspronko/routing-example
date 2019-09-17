<?php

declare(strict_types=1);

namespace Pronko\App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class TaskController
{
    public function __invoke(ServerRequestInterface $request, array $args = []): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write("<h1>Tasks</h1><p>Task with ID: " . $args['id'] . "</p>");
        return $response;
    }
}
