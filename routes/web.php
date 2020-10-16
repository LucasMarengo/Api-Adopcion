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

Route::get('/carga', 'ConexionesController@crear ');
Route::post('/carga', 'ConexionesController@mostrar');

Route::get('/personas', 'PersonaController@crear ');
Route::post('/personas', 'PersonaController@mostrar');

