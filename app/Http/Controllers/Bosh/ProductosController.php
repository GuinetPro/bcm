<?php

namespace App\Http\Controllers\Bosh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Producto;
use App\Model\Categoria;
use App\Model\TipoGas;
use App\Model\Tiro;
use App\Model\Litraje;
use App\Model\Modelo;
use App\Model\Marca;
use App\Model\TipoProducto;
use App\Model\TipoEspecificacion;
use App\Model\TipoPlanta;
use  App\Http\Requests\ProductoRequest;
use Image;

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
    
         return view("bosh.productos.index",["productos" => $productos]);
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
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $tipoEspecificacionList = TipoEspecificacion::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $plantaList = TipoPlanta::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        

        return view("bosh.productos.create",[
                                        "producto"      => $producto,
                                        "categoriaList" => $categorias,
                                        "marcaList"     => $marca,
                                        "tiroList"      => $tiro,
                                        "tipoEspecificacionList" => $tipoEspecificacionList,
                                        "plantaList" => $plantaList,
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
        
        $producto   = new Producto;

        $producto->modelo       = $request->modelo;
        $producto->codigo       = $request->codigo;
        $producto->marca_id     = (int)$request->marca_id;
        $producto->tipo_gas_id  = (int)$request->tipo_gas_id;
        $producto->tiro_id      = (int)$request->tiro_id;
        $producto->litraje_id   = (int)$request->litraje_id;
        $producto->tipo_producto_id   = (int)$request->tipo_producto_id;
        $producto->categoria_id   = (int)$request->categoria_id;
        $producto->tipo_planta_id = (int)$request->tipo_planta_id;
        $producto->tipo_especificacion_id = (int)$request->tipo_especificacion_id;


        $image = $request->file('imagen');

        if( $image != null ){

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
         
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            $producto->imagen =  $input['imagename'];
        }

        if($producto->save()){
            \Flash::success('Producto Creado con Exito.'); //<--FLASH MESSAGE
            return redirect("bosh/productos");
        }else{
            return view("bosh.productos.create",["producto" => $producto]);
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
        $producto   = Producto::find((int)$id);
        if(!$producto )
        {
            return response()->view('errors.500', [], 500);
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

        $producto   = Producto::find($id);

        if( !$producto ){
             \Flash::error('El Productos que busca no existe.');
            return redirect("/bosh/productos");
        }


        $categorias = Categoria::pluck('nombre', 'id')->prepend('Selecciona una Categoria','');
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $tipoEspecificacionList = TipoEspecificacion::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $plantaList = TipoPlanta::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        

        return view("bosh.productos.edit",[
                                        "producto"      => $producto,
                                        "categoriaList" => $categorias,
                                        "marcaList"     => $marca,
                                        "tiroList"      => $tiro,
                                        "tipoEspecificacionList" => $tipoEspecificacionList,
                                        "plantaList" => $plantaList,
                                        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id)
    {
 
        $producto   = Producto::find((int)$id);
        $producto->modelo       = $request->modelo;
        $producto->codigo       = $request->codigo;
        $producto->marca_id     = (int)$request->marca_id;
        $producto->tipo_gas_id  = (int)$request->tipo_gas_id;
        $producto->tiro_id      = (int)$request->tiro_id;
        $producto->litraje_id   = (int)$request->litraje_id;
        $producto->tipo_producto_id   = (int)$request->tipo_producto_id;
        $producto->categoria_id   = (int)$request->categoria_id;
        $producto->tipo_planta_id = (int)$request->tipo_planta_id;
        $producto->tipo_especificacion_id = (int)$request->tipo_especificacion_id;


        $image = $request->file('imagen');

        if( $image != null ){

            $pathToImage = public_path('images/').$producto->imagen;
            \File::delete($pathToImage);

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            $producto->imagen =  $input['imagename'];
        }


        if($producto->save()){

            \Flash::success('Producto Editado con Exito.'); //<--FLASH MESSAGE

            return redirect("bosh/productos");
        
        }else{
            return view("bosh.productos.edit",["producto" => $producto]);
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
