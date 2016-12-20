<?php

namespace App\Http\Controllers\Bosh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Gasfitero;
use App\Model\Categoria;
use App\Model\Taller;
use App\Model\User;
use App\Http\Requests\GasfiterRequest ;
use App\Model\Rol;

class GasfiterosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gasfiteros = Gasfitero::all();
    
         return view("bosh.gasfiteros.index",["gasfiteros" => $gasfiteros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallerList  = Taller::pluck('nombre', 'id')->prepend('Selecciona un Taller','');
        $gasfiter =  new Gasfitero;

        return view("bosh.gasfiteros.create",[
                                        "tallerList"  => $tallerList ,
                                        "gasfiter"    => $gasfiter,
 
                                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GasfiterRequest $request)
    {
        $gasfiter                =  new Gasfitero;
        $gasfiter->nombre        = $request->nombre;
        $gasfiter->apellidos     = $request->apellidos;
        $gasfiter->email         = $request->email;
        $gasfiter->telefono      = $request->telefono;
        $gasfiter->movil         = $request->movil;
        $gasfiter->taller_id     = (int)$request->taller_id;
        $gasfiter->region_id     = (int)$request->region_id;
        $gasfiter->comuna_id     = (int)$request->comuna_id;
        $gasfiter->rut           = $request->rut;
        $gasfiter->direccion     = $request->direccion;


        if($gasfiter->save()){
            \Flash::success('Gasfiter Creado con Exito.'); //<--FLASH MESSAGE
                return redirect("bosh/gasfiteros");
        }else{
            return view("bosh.gasfiteros.create",["gasfiter" => $gasfiter]);
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
        $tallerList  = Taller::pluck('nombre', 'id')->prepend('Selecciona un Taller','');  
        $gasfiter    = Gasfitero::find((int)$id);

        return view("bosh.gasfiteros.edit",[
                                        "tallerList"  => $tallerList, 
                                        "gasfiter" => $gasfiter
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
        $gasfiter              = Gasfitero::find((int)$id);
        $gasfiter->nombre        = $request->nombre;
        $gasfiter->apellidos     = $request->apellidos;
        $gasfiter->email         = $request->email;
        $gasfiter->telefono      = $request->telefono;
        $gasfiter->movil         = $request->movil;
        $gasfiter->taller_id     = (int)$request->taller_id;
        $gasfiter->region_id     = (int)$request->region_id;
        $gasfiter->comuna_id     = (int)$request->comuna_id;
        $gasfiter->rut           = $request->rut;
        $gasfiter->direccion     = $request->direccion;


        

        if($gasfiter->save()){
            \Flash::success('Gasfiter Creado con Exito.'); //<--FLASH MESSAGE
            return redirect("bosh/gasfiteros");
        }else{
            return view("bosh.gasfiteros.edit",["gasfiter" => $gasfiter]);
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
