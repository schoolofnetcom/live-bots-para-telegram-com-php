<?php

require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

SuHyMeBlaS\View::config(__DIR__ . '/template/');

$router = new SuHyMeBlaS\Router;
require __DIR__ . '/routes.php';
$result = $router->handler();

if (is_array($result)) {
    $result = json_encode($result);
}

if (is_string($result)) {
    echo $result;
}

if (!is_string($result)) {
    throw new Exception('Route result must be a string');
}
