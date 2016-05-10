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


Route::group(['prefix' => 'funcionarios'], function() {
    Route::get('',					['as' => 'func.index',	'uses' => 'FuncionariosController@index']);
    Route::get('create', 			['as' => 'func.create',	'uses' => 'FuncionariosController@create']);
    Route::post('store', 			['as' => 'func.store',	'uses' => 'FuncionariosController@store']);
    Route::get('{id}/edit', 	   	['as' => 'func.edit',   'uses' => 'FuncionariosController@edit']);
    Route::get('{id}/destroy', 		['as' => 'func.destroy','uses' => 'FuncionariosController@destroy']);
    Route::put('update/{clientes}', ['as' => 'func.update', 'uses' => 'FuncionariosController@update']);
});

Route::group(['prefix' => 'clientes'], function() {
    Route::get('',					['as' => 'cli.index',	'uses' => 'ClientesController@index']);
    Route::get('create', 			['as' => 'cli.create',	'uses' => 'ClientesController@create']);
    Route::post('store', 			['as' => 'cli.store',	'uses' => 'ClientesController@store']);
    Route::get('{id}/edit', 	   	['as' => 'cli.edit',    'uses' => 'ClientesController@edit']);
    Route::get('{id}/destroy', 		['as' => 'cli.destroy', 'uses' => 'ClientesController@destroy']);
    Route::put('update/{clientes}', ['as' => 'cli.update',  'uses' => 'ClientesController@update']);
});

Route::group(['prefix' => 'veiculos'], function() {
    Route::get('',					['as' => 'vei.index',	'uses' => 'VeiculosController@index']);
    Route::get('create', 			['as' => 'vei.create',	'uses' => 'VeiculosController@create']);
});

Route::group(['prefix' => 'viagens'], function() {
    Route::get('',					['as' => 'via.index',	'uses' => 'ViagensController@index']);
    Route::get('create', 			['as' => 'via.create',	'uses' => 'ViagensController@create']);
});


