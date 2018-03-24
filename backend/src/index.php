<?php

require_once '../vendor/autoload.php';

use Controllers\Calculation;
use Models\Post;

$post = new Post("Title test", "aaa", "Gugu");
$title = $post->getTitle();

$calc = new Calculation;

$loader = new Twig_Loader_Filesystem('../View');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(
  'sum' => $calc->sum(1, 1),
  'sub' => $calc->sub(1, 1),
  'mult' => $calc->mult(1, 1),
));
