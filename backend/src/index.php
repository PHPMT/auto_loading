<?php

require_once '../vendor/autoload.php';

use Controllers\Calculation;
use Models\Post;

$post = new Post("Title test", "aaa", "Gugu");
$title = $post->getTitle();

$calc = new Calculation;
echo "<h1> Calculadora </h1>";
echo "<h2> $title </h2>";
echo "<ul>";
echo "<li>soma 1 + 1 = ".$calc->sum(1, 1)."</li>";
echo "<li>subtração 1 - 1 = ".$calc->sub(1, 1)."</li>";
echo "<li>multiplicação 1 * 1 = ".$calc->mult(1, 1)."</li>";
echo "<ul/>";