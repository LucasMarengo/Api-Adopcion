<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar', 'ConexionesController@mostrar ');
Route::post('/mostrar', 'ConexionesController@mostrar');

Route::get('/personas', 'PersonaController@crear ');
Route::post('/personas', 'PersonaController@mostrar');

Route::get('/edicion', 'EdicionpersonaController@editar ');
Route::post('/edicion', 'EdicionpersonaController@mostrar');


