<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('templates/');

$twig = new Twig_Environment($loader);

echo $twig->render('view.twig');