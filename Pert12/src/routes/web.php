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

$router->group(['prefix' => 'api/v1/user'], function () use ($router) {
    $router->get('/', ['uses' => 'UserController@index']);
});

$router->group(['prefix' => 'api/v1/user', 'middleware'=> 'auth'], function () use ($router) {
    $router->get('/', ['uses' => 'UserController@index']);
});

$router->group(['prefix' => 'api/v1/product','middleware'=>'auth'],function () use ($router){
    $router->get('/', ['uses' => 'ProductController@index']);
    $router->post('/', ['uses' => 'ProductController@store']);
    $router->delete('/{id}',['uses' => 'ProductController@destroy']);
    $router->get('/{id}',['uses' => 'ProductController@show']);
    $router->put('/{id}',['uses' => 'ProductController@edit']);
});

$router->group(['prefix' => 'api/v1/customer','middleware'=>'auth'],function () use ($router){
    $router->get('/', ['uses' => 'CustomerController@index']);
    $router->post('/', ['uses' => 'CustomerController@store']);
    $router->delete('/{id}',['uses' => 'CustomerController@destroy']);
    $router->get('/{id}',['uses' => 'CustomerController@show']);
    $router->put('/{id}',['uses' => 'CustomerController@edit']);
});
//$router->get('/api/v1/user', ['uses' => 'UserController@index']);