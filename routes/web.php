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

Route::get('/','frontController@index');
Route::get('contacto','frontController@contacto');
Route::get('reviews','frontController@reviews');
Route::get('admin' ,'frontController@admin');

Route::resource('usuario', 'UsuarioController');



//Route to function index on textController.php
Route::get('controlador', 'testController@index');

//Route to function nombre on textController.php
Route::get('getnombre/{nombre?}', 'testController@getNombre');


//RESTful routes
Route::resource('movie', 'MovieController');


Route::get('test', function () {
    return "Prueba en route web.php!";
});

Route::get('nombre/{nombre?}', function ($nombre = "Gus") {
    return 'Welcome: '.$nombre;
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/