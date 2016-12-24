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
        $tipo_gas   = TipoGas::pluck('nombre', 'id')->prepend('Selecciona una TipoGas','');
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $litraje    = Litraje::pluck('lts', 'id')->prepend('Selecciona una Litraje','');
        $modelo     = Modelo::pluck('nombre', 'id')->prepend('Selecciona una Modelo','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $tipoProductos = TipoProducto::pluck('nombre', 'id')->prepend('Selecciona una Marca','');

        

        return view("bosh.productos.create",[
                                        "producto"      => $producto,
                                        "categoriaList" => $categorias,
                                        "marcaList"     => $marca,
                                        "modeloList"    => $modelo,
                                        "tipo_gasList"  => $tipo_gas,
                                        "tiroList"      => $tiro,
                                        "tipoProductos"      => $tipoProductos,
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
        $producto->marca_id     = (int)$request->marca_id;
        $producto->tipo_gas_id  = (int)$request->tipo_gas_id;
        $producto->tiro_id      = (int)$request->tiro_id;
        $producto->litraje_id   = (int)$request->litraje_id;
        $producto->tipo_producto_id   = (int)$request->tipo_producto_id;
        $producto->lugar_compra = $request->lugar_compra;
        $producto->fecha_compra =  date('Y-m-d',strtotime($request->fecha_compra));
        $producto->categoria_id = (int)$request->categoria_id;
        $producto->modelo_id    = (int)$request->modelo_id;

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
        $tipo_gas   = TipoGas::pluck('nombre', 'id')->prepend('Selecciona una TipoGas','');
        $tiro       = Tiro::pluck('nombre', 'id')->prepend('Selecciona una Tiro','');
        $litraje    = Litraje::pluck('lts', 'id')->prepend('Selecciona una Litraje','');
        $modelo     = Modelo::pluck('nombre', 'id')->prepend('Selecciona una Modelo','');
        $marca      = Marca::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        $tipoProductos = TipoProducto::pluck('nombre', 'id')->prepend('Selecciona una Marca','');
        
        return view("bosh.productos.edit",[
                                        "producto"      => $producto,
                                        "categoriaList" => $categorias,
                                        "marcaList"     => $marca,
                                        "modeloList"    => $modelo,
                                        "tipo_gasList"  => $tipo_gas,
                                        "tiroList"      => $tiro,
                                        "tipoProductos"      => $tipoProductos,
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
    public function update(ProductoRequest $request, $id)
    {
 
        $producto   = Producto::find((int)$id);

        $producto->nombre       = $request->nombre;
        $producto->precio       = $request->precio;
        $producto->codigo       = $request->codigo;
        $producto->marca_id     = (int)$request->marca_id;
        $producto->tipo_gas_id  = (int)$request->tipo_gas_id;
        $producto->tiro_id      = (int)$request->tiro_id;
        $producto->litraje_id   = (int)$request->litraje_id;
        $producto->tipo_producto_id   = (int)$request->tipo_producto_id;
        $producto->lugar_compra = $request->lugar_compra;
        $producto->fecha_compra = date('Y-m-d',strtotime($request->fecha_compra));
        $producto->categoria_id = (int)$request->categoria_id;
        $producto->modelo_id    = (int)$request->modelo_id;


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
