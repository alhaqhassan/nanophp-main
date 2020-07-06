<?php

$loader = require_once realpath(__DIR__ . "/../vendor/autoload.php");

if (App\Config::DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

$requestURISplit = parse_url($_SERVER["REQUEST_URI"]);
$URI = $requestURISplit["path"];

$di = new NanoPHP\DependencyInjector();

$di->register("config", "\App\Config")
    ->register("request", "\NanoPHP\Library\Http\Request")
    ->register("response", "\NanoPHP\Library\Http\Response")
    ->register("router", "\NanoPHP\Router")
    ->register("encrypter", "\NanoPHP\Library\Encrypter");

$routes = App\Routes::getRoutes();
$router = $di->make('router')
                ->setDependencyInjector($di)
                ->setURI($URI)
                ->setRoutes($routes)
                ->route();
