<?php

use Illuminate\Http\Request;
use App\Model\Producto;
use App\Model\Region;
use App\Model\Comuna;
use App\Model\Direccion;
use App\Model\Telefono;
use App\Model\Cliente;
use App\Model\Modelo;
use App\Model\ProductoCliente;
use App\Model\Taller;

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

Route::get('/regiones', function (Request $request) {

    $regiones = Region::all();
    return response()->json($regiones);
});


Route::get('/comunas', function (Request $request) {

    $comunas = Comuna::all();
    return response()->json($comunas);
});


Route::get('/direcciones/{id}', function ($id) {
    $direcciones = Direccion::where('cliente_id',$id)->get();
    return response()->json($direcciones);
});

Route::get('/telefonos/{id}', function ($id) {
    $telefonos = Telefono::where('cliente_id',$id)->get();
    return response()->json($telefonos);
});



Route::get('/productoCliente/{id}', function ($id_cliente) {
    

        $cliente = Cliente::find($id_cliente);

        $data = array();
        $i = 0;

        foreach ($cliente->productoClientes()->get() as $c) {
          
           $data[$c->id] = array();
           
           $producto   = Producto::find((int)$c->producto_id);
           $direccion   = Direccion::find((int)$c->direccion_id);

           $data[$c->id]["id"] = $c->id;
           $data[$c->id]["collapse"] = ($i == 0)?true:false;
           $data[$c->id]["producto"]  = $producto;
           $data[$c->id]["direccion"] = $direccion;
           $i++;

        }
       
        return response()->json($data);
});


Route::post('/productoCliente/{id}', function ($id_cliente) {
    

        $productoCliente   = new ProductoCliente;   
        $productoCliente->producto_id     = $_POST['producto'];
        $productoCliente->cliente_id      = $id_cliente;
        $productoCliente->direccion_id    = $_POST['direccion'];

        if($productoCliente->save()){
             
            return response()->json(["success" => true],200);
        }else{
              
            return response()->json(["error" => true],200);
        }
       
    return response()->json($data);
});


Route::get('/modelos/{id}', function ($id) {

         $modelos = Modelo::all();//Modelo::where('categoria_id',$id)->get();
         return response()->json($modelos);
});


Route::get('/taller/{id}', function ($id) {
    $taller = Taller::find($id);
    //$taller->coberturas;

    $coberturas = array();

    foreach ($taller->coberturas as $c ) {
      
      $comuna =  Comuna::find($c->comuna_id); 


      $coberturas[] =  array(
            "id"           => $c->id, 
            "comentario"   => $c->comentario, 
            "comuna_id"    => $c->comuna_id, 
            "taller_id"    => $c->taller_id, 
            "kilometro"    => $c->kilometro, 
            "valor_visita" => $c->valor_visita, 
            "tipo_sat"     => $c->tipo_sat, 
            "created_at"   => $c->created_at, 
            "updated_at"   => $c->updated_at,
            "region"       => Region::find($comuna->region_id),
            "comuna"       => $comuna, 
      );

    }

    $taller->com = $coberturas;
    $taller->comuna = Comuna::find($taller->comuna_id);
   
    return response()->json($taller);
});