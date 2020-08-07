<?php

namespace Blog;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Blog\Author;
use Blog\Visitante;


class App
{
  public function run()
  {
    $app = AppFactory::create();

    $app->get('/posts', function (Request $request, Response $response, array $args) {
 	    echo "posts";
    });

    $app->get('/', function (Request $request, Response $response, array $args) {
      $visitante = new Visitante();
      $comentario = $visitante->comentar("Teste");

      $data = array(0 => $comentario);
      $payload = json_encode($data);
      
      $response->getBody()->write($payload);
      return $response->withHeader('Content-Type', 'application/json');
    });

    $app->run();
  }
}
