<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/funcionarios', 'FuncionariosController@index');

Route::get('/funcionarios/create', 'FuncionariosController@create');

Route::get('/clientes', 'ClientesController@index');

Route::get('/clientes/create', 'ClientesController@create');

Route::get('/veiculos', 'FuncionariosController@index');

Route::get('/veiculos/create', 'FuncionariosController@create');

Route::get('/viagens', 'ViagensController@index');

Route::get('/viagens/create', 'ViagensController@create');


