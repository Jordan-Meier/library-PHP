<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ClassName.php";

    $server = 'mysql:host=localhost;dbname=library';
	$username = 'root';
	$password = 'root';
	$DB = new PDO($server, $username, $password);

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });


    return $app;
?>