<?php

namespace Blog;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Blog\Controller\PostController;

class App
{
  public function run()
  {
    $app = AppFactory::create();

    $app->get('/', function (Request $request, Response $response, array $args) {    
      $controller = new PostController();
      return $controller->list($request, $response, $args);
    });

    $app->run();
  }
}
