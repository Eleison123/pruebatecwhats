<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Rutas del Blog*/

// Ruta para mostrar el listado de entradas
Route::get('/entries', 'BlogController@index')->name('entries.index');

// Ruta para mostrar el formulario de alta de entradas
Route::get('/entries/create', 'BlogController@create')->name('entries.create');

// Ruta para guardar la entrada creada
Route::post('/entries', 'BlogController@store')->name('entries.store');



// Ruta para realizar la búsqueda de entradas
Route::get('/entries/search', 'BlogController@search')->name('entries.search');

// Ruta para mostrar los detalles de una entrada
Route::get('/entries/{entry}', 'BlogController@show')->name('entries.show');