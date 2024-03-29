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
Route::get('/libros','librocontroller@listarLibros');
Route::get('/libros/autor/{autor}','librocontroller@listarLibrosAutor');
Route::get('/libros/genero/{genero}','librocontroller@listarLibrosGenero');