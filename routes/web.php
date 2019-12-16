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

// leo edit: create route endpoint for our api
$router->group(['prefix' => 'api/v1'], function() use ($router){
    // categories

    // get all categories - http://localhost:8000/api/v1/categories
    $router->get('/categories', 'CategoriesController@getAllCategories');
    // get all categories - http://localhost:8000/api/v1/categories/1
    $router->get('/categories/{id}', 'CategoriesController@getCategory');

    $router->get('/products', 'ProductsController@getAllProducts');
   
    $router->get('/products/{id}', 'ProductsController@getProduct');
});
