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
use App\Model\Taller;
use App\Model\Gasfitero;
use App\Model\Cliente;
use App\Model\Producto;
use App\Model\Repuesto;



 Route::group(['middleware' => ['auth','taller'],'prefix' => 'taller'], function () 
 {
     Route::resource('visitas','Taller\VisitasController');
 });


 Route::group(['middleware' => ['auth','tecnico'],'prefix' => 'tecnico'], function () 
 {
     Route::resource('visitas','Tecnico\VisitasController');
 });


 Route::group(['middleware' => ['auth','bosh'],'prefix' => 'bosh'], function () 
 {
     Route::resource('categorias','Bosh\CategoriasController');
     Route::resource('gasfiteros','Bosh\GasfiterosController');
     Route::resource('litrajes','Bosh\LitrajesController');
     Route::resource('marcas','Bosh\MarcasController');
     Route::resource('repuestos','Bosh\RepuestosController');
     Route::resource('talleres','Bosh\TalleresController');
     Route::resource('tiros','Bosh\TirosController');
     Route::resource('tipogas','Bosh\TipogasController');
     Route::resource('clientes','Bosh\ClienteController');
     Route::resource('usuarios','Bosh\UsuariosController');
     Route::get('/','Bosh\HomeController@index');   

 });




Route::group(['middleware' => 'auth'], function () {

     Route::get('/', 'HomeController@index');
     Route::resource('productoCliente','ProductoClienteController');
     Route::resource('clientes','ClienteController');
     Route::resource('modelos','ModelosController');
     Route::resource('visitas','VisitasController');
     Route::resource('productos','ProductosController');

});



Auth::routes();

Route::get('/', 'HomeController@index');


Route::get('/imagenes/{img}',function($img){
	//echo "images/$img";
    return \Image::make(public_path("/images/$img"))->resize(200, 200)->response('jpg');
});

Route::get('/export/taller',function(){

       Excel::create('Talleres Excel', function($excel) {
 
            $excel->sheet('Talleres', function($sheet) {
 
                $talleres = Taller::all();
 
                $sheet->fromArray($talleres);
 
            });
        })->download('xls');
});

Route::get('/export/gasfiteros',function(){

       Excel::create('Gasfiters Excel', function($excel) {
 
            $excel->sheet('Gasfiters', function($sheet) {
 
                $gasfiteros = Gasfitero::all();
 
                $sheet->fromArray($gasfiteros);
 
            });
        })->download('xls');
});


Route::get('/export/clientes',function(){

       Excel::create('Cliente Excel', function($excel) {
 
            $excel->sheet('Cliente', function($sheet) {
 
                $clientes = Cliente::all();
 
                $sheet->fromArray($clientes);
 
            });
        })->download('xls');
});

Route::get('/export/productos',function(){

       Excel::create('Producto Excel', function($excel) {
 
            $excel->sheet('Producto', function($sheet) {
 
                $productos = Producto::all();
 
                $sheet->fromArray($productos);
 
            });
        })->download('xls');
});


Route::get('/export/repuestos',function(){

       Excel::create('Repuesto Excel', function($excel) {
 
            $excel->sheet('Repuesto', function($sheet) {
 
                $repuestos = Repuesto::all();
 
                $sheet->fromArray($repuestos);
 
            });
        })->download('xls');
});
