<?php

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

$router->group(['prefix' => 'v1', 'middleware' => 'api'], function () use ($router) {
  $router->get('locations',  ['uses' => 'LocationController@index']);

  $router->get('locations/{id}', ['uses' => 'LocationController@show']);

  $router->get('projects',  ['uses' => 'ProjectController@index']);

  $router->get('projects/{id}', ['uses' => 'ProjectController@show']);

  $router->get('goals',  ['uses' => 'GoalController@index']);

  $router->get('goals/{id}', ['uses' => 'GoalController@show']);
});
