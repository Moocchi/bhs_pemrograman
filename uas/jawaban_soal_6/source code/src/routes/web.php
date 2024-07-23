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

$router->group(['prefix' => 'api/v1', 'middleware' => 'auth'], function () use ($router) {
    $router->post('/buku', 'BukuController@create');
    $router->put('/buku/{id}', 'BukuController@update');
    $router->delete('/buku/{id}', 'BukuController@delete');
    $router->post('/pinjam-buku', 'PinjamBukuController@create');
    $router->get('/pinjam-buku', 'PinjamBukuController@index');
    $router->get('/pinjam-buku/{id}', 'PinjamBukuController@show');
    $router->put('/pinjam-buku/{id}', 'PinjamBukuController@update');
    $router->delete('/pinjam-buku/{id}', 'PinjamBukuController@delete');
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('/buku', 'BukuController@index');
    $router->get('/buku/{id}', 'BukuController@show');
});

