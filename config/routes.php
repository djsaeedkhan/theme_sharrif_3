<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
Router::plugin(
    'Template',
    ['path' => '/template'],
    function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Content', 'action' => 'index', 'home']);
        $routes->fallbacks(DashedRoute::class);
    }
);
