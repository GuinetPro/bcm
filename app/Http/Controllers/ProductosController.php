<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Producto;
use App\Model\Categoria;
use App\Model\TipoGas;
use App\Model\Tiro;
use App\Model\Litraje;
use App\Model\Modelo;
use App\Model\Marca;
use  App\Http\Requests\ProductoRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos = Producto::all();
    
         return view("productos.index",["productos" => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto   = new Producto;
        $categorias = Categoria::pluck('nombre', 'id')->prepend('Selecciona una Categoria','');
        $tipo_gas   = TipoGas::pluck('nombre', 'id')->prepend('Selecciona una TipoGas','');
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $litraje    = Litraje::pluck('nombre', 'id')->prepend('Selecciona una Litraje','');
        $modelo     = Modelo::pluck('nombre', 'id')->prepend('Selecciona una Modelo','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');

        return view("productos.create",[
                                        "producto"      => $producto,
                                        "categoriaList" => $categorias,
                                        "marcaList"     => $marca,
                                        "modeloList"    => $modelo,
                                        "tipo_gasList"  => $tipo_gas,
                                        "tiroList"      => $tiro,
                                        "litrajeList"   => $litraje 

                                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
