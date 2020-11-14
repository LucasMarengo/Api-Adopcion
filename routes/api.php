<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', 'ShowUserListAction@run');

Route::post('/animales/add', \App\Http\Actions\AnimalAddAction::class);
Route::get('/animales/list', \App\Http\Actions\AnimalListAction::class);
Route::put('/animales/edit/{id_animal}', \App\Http\Actions\AnimalEditAction::class);
Route::delete('/animales/delete/{id_animal}', \App\Http\Actions\AnimalDeleteAction::class);
Route::get('/animales/list/{tipo}', \App\Http\Actions\AnimalListByTypeAction::class);


Route::post('/personas/add', \App\Http\Actions\PersonaAddAction::class);
Route::get('/personas/list', \App\Http\Actions\PersonaListAction::class);
Route::put('/personas/edit/{id_persona}', \App\Http\Actions\PersonaEditAction::class);
Route::delete('/personas/delete/{id_persona}', \App\Http\Actions\PersonaDeleteAction::class);

Route::post('/conexiones/add', \App\Http\Actions\ConexionAddAction::class);

