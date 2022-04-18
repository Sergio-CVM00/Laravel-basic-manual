<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'HolaController@welcome')->name('welcome');
/*
Route::get('/hola/{nombre}','HolaController@saludo')->name('saludo');
Route::get('/hola/{nombre}/{edad}','HolaController@saludo2')->name('saludo2');
*/
Route::get('/articulos','ArticuloController@index')->name('articulos');
Route::get('/articulo/nuevo','ArticuloController@nuevo')->name('insertar_articulo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
