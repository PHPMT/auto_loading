<?php

namespace Blog\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Blog\Database\PostRepository;
use Blog\View\PostView;


class PostController
{

  private $repository;
  private $view;

  function __construct()
  {
    $this->repository = new PostRepository();
    $this->view = new PostView();
  }

  public function list(Request $request, Response $response, array $args): Response  
  {
    $list_post = $this->repository->getAll();
    return $this->view->renderListPost($response, $list_post);
  }

}
