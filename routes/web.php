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

$router->get('/',  'VehicleController@get');

$router->get('/{id}',  'VehicleController@show');

$router->post('/', 'VehicleController@create');

$router->put('/{id}', 'VehicleController@update');


$router->delete('/{id}', 'VehicleController@destroy');

