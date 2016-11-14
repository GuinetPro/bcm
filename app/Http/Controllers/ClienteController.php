<?php

namespace App\Http\Controllers;
use App\Model\Cliente;
use App\Model\Region;
use App\Model\Telefono;
use App\Model\Direccion;
use App\Model\Categoria;
use Illuminate\Http\Request;
use App\Model\Modelo;
use App\Model\Marca;
use  App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clientes = Cliente::all();
    
         return view("clientes.index",["clientes" => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente  = new Cliente;
        $regiones  =  Region::all();

        return view("clientes.create",["cliente" => $cliente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        
        $cliente  = new Cliente;
        //exit;
        if(  Cliente::saveData($request) ){
             \Flash::success('Cliente Creado con Exito.');
            return redirect("/clientes");
        }else{
            return view("clientes.create",["cliente" => $cliente]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        $categorias = Categoria::pluck('nombre', 'id')->prepend('Selecciona una Categoria','');

        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');


        if( !$cliente ){
             \Flash::error('El Cliente que buscano existe.');
            return redirect("/clientes");
        }else{
            return view("clientes.show",["cliente" => $cliente,
                                         "categoriaList" => $categorias,
                                          "marcaList"    => $marca
                                         ]);
        }

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        if( !$cliente ){
             \Flash::error('El Cliente que busca no existe.');
            return redirect("/clientes");
        }else{
            return view("clientes.edit",["cliente" => $cliente]);
        }      
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
        $cliente = Cliente::find($id);

        $cliente->nombre          = $request->nombre;
        $cliente->apellidoPaterno = $request->apellidoPaterno;
        $cliente->apellidoMaterno = $request->apellidoMaterno;
        $cliente->rut             = $request->rut;
        $cliente->email           = $request->email;
        $cliente->comentario      = $request->comentario;

        //updatemoa cliente
        if($cliente->save()){
            
            Telefono::updateData($request,$id);
            Cliente::updateData($request,$id);
            \Flash::success('Cliente Editado con Exito.');
            return redirect("/clientes");
            
        }else{
            return view("clientes.edit",["cliente" => $cliente]);
        }
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
