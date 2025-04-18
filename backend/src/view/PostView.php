<?php

namespace Blog\View;

use Psr\Http\Message\ResponseInterface as Response;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class PostView
{
  private Environment $twig;

  public function __construct()
  {
      $loader = new FilesystemLoader('templates');
      $this->twig = new Environment($loader);
  }

  public function renderListPost(Response $response, array $posts): Response  
  {
    $html = $this->twig->render('index.html', ['posts' => $posts]);
    $response->getBody()->write($html);
    return $response->withHeader('Content-Type', 'text/html');    
  }
}
