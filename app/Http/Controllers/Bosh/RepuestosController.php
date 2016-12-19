<?php

namespace App\Http\Controllers\Bosh;

use Illuminate\Http\Request;
use App\Model\Repuesto;
use App\Http\Controllers\Controller;
use App\Http\Requests\RepuestoRequest;


class RepuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $repuestos = Repuesto::all();
    
         return view("bosh.repuestos.index",["repuestos" => $repuestos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repuesto =  new Repuesto;

        return view("bosh.repuestos.create",[
                                        "repuesto"      => $repuesto
                                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepuestoRequest $request)
    {
         $repuesto   = new Repuesto;
         $repuesto->nombre  = $request->nombre;
         $repuesto->precio  = $request->precio;
         $repuesto->codigo  = $request->codigo;
         $repuesto->stock  = $request->stock;
         $repuesto->comentario  = $request->comentario;

        if($repuesto->save()){
            \Flash::success('Repuesto Creado con Exito.'); //<--FLASH MESSAGE
            return redirect("bosh/repuestos");
        }else{
            return view("bosh.repuestos.create",["repuesto" => $repuesto]);
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
        $repuesto   = Repuesto::find((int)$id);
        if(!$repuesto )
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
        $repuesto   = Repuesto::find($id);

        if( !$repuesto ){
             \Flash::error('El Repuesto que busca no existe.');
             return redirect("bosh/repuestos");
        }

        return view("bosh.repuestos.edit",[
                                        "repuesto"      => $repuesto
                                        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RepuestoRequest $request, $id)
    {
         $repuesto   = new Repuesto;
         $repuesto->nombre  = $request->nombre;
         $repuesto->precio  = $request->precio;
         $repuesto->codigo  = $request->codigo;
         $repuesto->stock  = $request->stock;
         $repuesto->comentario  = $request->comentario;

        if($repuesto->save()){
            \Flash::success('Repuesto Creado con Exito.'); //<--FLASH MESSAGE
             return redirect("bosh/repuestos");
        }else{
            return view("bosh.repuestos.create",["repuesto" => $repuesto]);
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
