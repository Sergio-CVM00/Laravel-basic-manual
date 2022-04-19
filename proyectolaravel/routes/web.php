<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/hola/{nombre}','HolaController@saludo')->name('saludo');
Route::get('/hola/{nombre}/{edad}','HolaController@saludo2')->name('saludo2');
*/

Route::get('/', 'HolaController@welcome')->name('welcome');
Route::get('/articulos','ArticuloController@index')->name('articulos');
Route::get('/articulos/nuevo','ArticuloController@nuevo')->name('insertar_articulo');
Route::get('/articulos/{art}','ArticuloController@mostrar_articulo')->name('un_articulo');

Route::post('/articulos','ArticuloController@guardar')->name('guardar_articulo');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

?>