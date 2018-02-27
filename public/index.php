<?php


use Psr\Http\Message\RequestInterface;
use SONFin\Application;
use SONFin\Plugins\RoutePlugin;
use SONFin\Plugins\ViewPlugin;
use SONFin\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());
$app->plugin(new ViewPlugin());
$app->get('/', function (RequestInterface $request){
    var_dump($request->getUri());die();
    echo "Olá terraquio!";
});


$app->get('home/{name}/{id}', function (\Psr\Http\Message\ServerRequestInterface $request){
    $response = new \Zend\Diactoros\Response();
    $response->getBody()->write("response com emiter do diactors");
    echo "Mostrando outra rota!";
    echo "<br>";
    echo $request->getAttribute('name');
});

$app->start();