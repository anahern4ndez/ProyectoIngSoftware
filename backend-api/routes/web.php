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
$router->get('/users/look', 'ExampleController@getOneUser');
$router->get('/users/some', 'ExampleController@getSomeUser');
$router->post('/message', 'ExampleController@postExample');

//CRUD: TABLA ESTADOS DB
$router->get('/EstadoController/find', 'EstadoController@find');
$router->get('/EstadoController/getEstado', 'EstadoController@getEstado');
$router->post('/EstadoController/insert', 'EstadoController@insert');
$router->get('/EstadoController/update', 'EstadoController@update');

//CRUD: TABLA PACIENTES
$router->get('/PacienteController/findOne', 'PacienteController@findOne');
$router->post('/PacienteController/findById', 'PacienteController@findById');
$router->get('/PacienteController/findAll', 'PacienteController@findAll');
$router->post('/PacienteController/insert', 'PacienteController@store');
$router->put('/PacienteController/update', 'PacienteController@update');
$router->put('/PacienteController/updateAll', 'PacienteController@updateAll');
$router->delete('/PacienteController/delete', 'PacienteController@delete');

//CRUD: TABLA CONSULTAS
$router->post('/ConsultaController/insert', 'ConsultaController@store');
$router->put('/ConsultaController/update', 'ConsultaController@updateAll');
$router->post('/ConsultaController/findOne', 'ConsultaController@findOne');
$router->post('/ConsultaController/findAll', 'ConsultaController@findAll');

//CRUD: TABLA COMENTARIO
$router->post('/ComentarioController/insert', 'ComentarioController@store');
$router->get('/ComentarioController/findAll', 'ComentarioController@findAll');

//get de sindromes
$router->get('/sindromeController/getAll', 'sindromeController@getAll');

//get info from procedencias
$router->post('/ProcedenciaController/locate', 'ProcedenciaController@getLocation');

//get info from estado
$router->get('/EstadoController/getAllEstado', 'EstadoController@getAllEstado');

//change status
$router->post('/cambioEstadoController/save', 'cambioEstadoController@save');


$router->delete('/users/destroy','ExampleController@destroy');
$router->post('/users/create', 'ExampleController@store');
$router->put('/users/update', 'ExampleController@update');
$router->post('/doLogin', 'HomeController@printInfo');

$router->get('/evaluateLogin', 'loginController@doLogin');
$router->get('/verifyLogin', 'loginController@login');

$router->post('/login', 'loginController@login');

$router->post('/logout', 'loginController@logout');

// Método de menú principal que obtiene el nombre del usuario logeado
$router->get('/get_nombre', 'MenuPrincipalController@menu_get_nombre');

$router->get('/get_citas', 'MenuPrincipalController@menu_get_citas');

$router->get('/get_nombre_paciente', 'MenuPrincipalController@paciente_get_nombre');

// CRUD CITAS
$router->get('/citas', 'CitasController@getCitas');
$router->post('/citas', 'CitasController@store');
$router->put('/citas/{id}', 'CitasController@update');
$router->delete('/citas/{id}', 'CitasController@destroy');
