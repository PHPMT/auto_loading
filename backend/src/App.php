<?php

namespace Blog;

use Blog\Database\PostRepository;
use Blog\View\Post;

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
