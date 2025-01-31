<?php

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort(){
    require "views/404.php";
    die();
}

$routes = require "routes.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);