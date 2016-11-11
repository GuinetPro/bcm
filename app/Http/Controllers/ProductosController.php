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
        
        $producto   = new Producto;

        $producto->nombre       = $request->nombre;
        $producto->precio       = $request->precio;
        $producto->codigo       = $request->codigo;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id     = $request->marca_id;
        $producto->modelo_id    = $request->modelo_id;
        $producto->tipo_gas_id  = $request->tipo_gas_id;
        $producto->tiro_id      = $request->tiro_id;
        $producto->litraje_id   = $request->litraje_id;
        $producto->lugar_compra = $request->lugar_compra;
        $producto->fecha_compra = $request->fecha_compra;


        $image = $request->file('imagen');

        if( $image != null ){


            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
         
            /*$destinationPath = public_path('/thumbnail');
            $img = Image::make($image->getRealPath());


            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);*/

            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);

            $producto->imagen =  $input['imagename'];
        }

        if($producto->save()){
            \Flash::success('Producto Creado con Exito.'); //<--FLASH MESSAGE
            return redirect("productos");
        }else{
            return view("productos.create",["producto" => $producto]);
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
        $producto   = Producto::find($id);
        $categorias = Categoria::pluck('nombre', 'id')->prepend('Selecciona una Categoria','');
        $tipo_gas   = TipoGas::pluck('nombre', 'id')->prepend('Selecciona una TipoGas','');
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $litraje    = Litraje::pluck('nombre', 'id')->prepend('Selecciona una Litraje','');
        $modelo     = Modelo::pluck('nombre', 'id')->prepend('Selecciona una Modelo','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');

        return view("productos.edit",[
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
 
        $producto   = Producto::find($id);

        $producto->nombre       = $request->nombre;
        $producto->precio       = $request->precio;
        $producto->codigo       = $request->codigo;
        $producto->categoria_id = $request->categoria_id;
        $producto->marca_id     = $request->marca_id;
        $producto->modelo_id    = $request->modelo_id;
        $producto->tipo_gas_id  = $request->tipo_gas_id;
        $producto->tiro_id      = $request->tiro_id;
        $producto->litraje_id   = $request->litraje_id;
        $producto->lugar_compra = $request->lugar_compra;
        $producto->fecha_compra = $request->fecha_compra;


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

            return redirect("productos");
        
        }else{
            return view("productos.edit",["producto" => $producto]);
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
