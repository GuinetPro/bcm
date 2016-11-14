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

Route::get('/', 'ClienteController@index');


Route::resource('clientes','ClienteController');

Route::resource('visitas','VisitasController');

Route::resource('productos','ProductosController');


Route::resource('regiones','RegionesController',[
	'only'=>'index'
] );


Route::resource('comunas','ComunasController',[
	'only'=>['index','show']
] );


Route::resource('direcciones','DireccionesController',[
	'only'=>['show']
] );



Route::resource('telefonos','TelefonosController',[
	'only'=>['show']
] );



Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/imagenes/{img}',function($img){
	//echo "images/$img";
    return \Image::make(public_path("/images/$img"))->resize(200, 200)->response('jpg');
});