<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users1', 'Student1Controller@index'); // get all users record
$router->post('/ausers1', 'Student1Controller@add'); // create new user record
$router->get('/gusers1/{id}', 'Student1Controller@show'); // get user by id
$router->put('/uusers1/{id}', 'Student1Controller@update'); // update user record
$router->patch('/uusers1/{id}', 'Student1Controller@update'); // update user record
$router->delete('/dusers1/{id}', 'Student1Controller@delete'); // delete record


$router->get('/users2', 'Student2Controller@index'); // get all users record
$router->post('/ausers2', 'Student2Controller@add'); // create new user record
$router->get('/gusers2/{id}', 'Student2Controller@show'); // get user by id
$router->put('/uusers2/{id}', 'Student2Controller@update'); // update user record
$router->patch('/uusers2/{id}', 'Student2Controller@update'); // update user record
$router->delete('/dusers2/{id}', 'Student2Controller@delete'); // delete record
