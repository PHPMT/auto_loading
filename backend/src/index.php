<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html', array(
  'title' => "Title Sample",
  'author' => "João de Barro",
  'text' => "Lorem ipsum dolor sit amet consectetur adipiscing elit, aliquet conubia erat mus class non, interdum himenaeos ultricies pretium suspendisse habitasse. Enim praesent mauris faucibus magna sem fringilla dictumst netus congue urna commodo varius cursus, phasellus ornare proin nostra leo fusce dui a est donec suscipit quam. Neque semper senectus hac massa conubia, morbi facilisis ut at sociis, ornare luctus duis pellentesque.",
));
