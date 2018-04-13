<?php

namespace Blog;

use Blog\Database\PostRepository;

class App
{
  public function run()
  {
    $repository = new PostRepository;
    $listPost = $repository->getAll();
    $view = new Post();
    $view->renderListPost($listPost);
  }
}