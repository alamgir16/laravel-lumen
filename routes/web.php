<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/get', function () use ($router) {
    return "I am get method";
});
$router->post('/post', function () use ($router) {
    return "I am post method";
});
$router->put('/put', function () use ($router) {
    return "I am put method";
});

$router->delete('/delete', function () use ($router) {
    return "I am delete method";
});
