<?php

use Illuminate\Http\Request;
use App\Model\Producto;
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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get('/productos', function (Request $request) {

	$categoria = (int)$request->input('categoria');
    $marca     = (int)$request->input('marca');
    $modelo    = (int)$request->input('modelo');
   	$productos = Producto::where(['marca_id'=>$marca,'categoria_id'=>$categoria,'modelo_id'=>$modelo])->get();
    return response()->json($productos);
});