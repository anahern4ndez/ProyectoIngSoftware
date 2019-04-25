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



// aca se definen las rutas del api
// se debe especificar de primero el verbo HTTP como un metodo,
// puede ser get, post, put, delete, etc...
// luego, el primer parametro es la ruta a la que se va a responder
// y el segundo parametro es el controlador y el nombre del metodo que
// responde a esa ruta: NombreControlador@nombreMetodo
$router->get('/test', 'ExampleController@index');
$router->get('/users', 'ExampleController@getUsers');
$router->post('/message', 'ExampleController@postExample');

$router->delete('/users/destroy','ExampleController@destroy');
$router->post('/users/create', 'ExampleController@store');
$router->put('/users/update', 'ExampleController@update');



$router->post('/doLogin', 'HomeController@printInfo');

$router->get('/evaluateLogin', 'loginController@doLogin');
$router->get('/verifyLogin', 'loginController@login');

$router->post('/login', 'loginController@login');

$router->post('/logout', 'loginController@logout');

$router->delete('/users/{id}','ExampleController@destroy');

