<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../src/public/views');
$twig   = new Twig_Environment($loader, [
    'cache' => __DIR__ . '/../data',
]);

echo $twig->render('index.html.twig');
