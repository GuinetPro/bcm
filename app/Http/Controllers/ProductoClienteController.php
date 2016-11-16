<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProductoCliente;
use App\Model\Cliente;
use App\Model\Producto;
use App\Model\Direccion;

class ProductoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         if($request->ajax()) {
         
            $productoCliente   = new ProductoCliente;   
            $productoCliente->producto_id     = $request->producto;
            $productoCliente->cliente_id      = $request->cliente;
            $productoCliente->direccion_id    = $request->direccion;

            if($productoCliente->save()){
             
               return response()->json(["success" => true],200);
            }else{
              
              return response()->json(["error" => true],200);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
