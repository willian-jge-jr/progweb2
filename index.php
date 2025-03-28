<?php

require_once 'autoload.php';


use App\Router;


$route = new Router();

$route->get('home', function() {
    include __DIR__.'/view/home.php';
});

$route->run();