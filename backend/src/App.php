<?php

namespace Blog;

use \Slim\App as Server;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Blog\Author;
use Blog\Visitante;

class App
{
  public function run()
  {
    $server = new Server;
    $server->get('/', function (Request $request, Response $response, array $args) {
      $visitante = new Visitante();
      $comentario = $visitante->comentar("Teste");
      $newResponse = $response->withJson(array(0 => $comentario));
      return $newResponse;
    /*	    
      $author = new Author();
      $data = $author->insertAuthor('name', 'lastname', 'name@contact');
      $newResponse = $response->withJson($data);
      return $newResponse;
      */
    });
    $server->run();
  }
}
