<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/', 'HomeController@index');

Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresa/nueva', 'EmpresaController@create');
Route::post('/empresa/store', 'EmpresaController@store');
Route::get('/empresa/{id}', 'EmpresaController@show');

Route::get('/promociones', 'PromocionController@index');
Route::get('/promocion/nueva', 'PromocionController@create');
Route::post('/promocion/store', 'PromocionController@store');
Route::get('/promocion/{id}', 'PromocionController@show');