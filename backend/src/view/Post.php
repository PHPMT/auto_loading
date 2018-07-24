<?php

namespace Blog\View;

class Post
{
  public function renderPost($post)
  {
    $loader = new \Twig_Loader_Filesystem('templates');
    $twig = new \Twig_Environment($loader); 

    echo $twig->render('index.html', $post);
  }

  public function renderListPost($listPost)
  {
    $loader = new \Twig_Loader_Filesystem('templates');
    $twig = new \Twig_Environment($loader);

    echo $twig->render('index.html', $listPost);
  }
}
