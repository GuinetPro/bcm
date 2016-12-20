<?php

namespace App\Http\Controllers\Bosh;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Taller;
use App\Model\Comuna;
use App\Model\Categoria;
use App\Model\User;
use App\Model\Rol;
use App\Http\Requests\TallerRequest;

class TalleresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $talleres = Taller::all();
    
         return view("bosh.talleres.index",["talleres" => $talleres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunaList = Comuna::pluck('nombre', 'id')->prepend('Selecciona una Comuna','');
        $taller =  new Taller;

        return view("bosh.talleres.create",[
                                        "taller"      => $taller,
                                        "comunaList" => $comunaList,
                                        'user' =>      new User
                                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TallerRequest $request)
    {

             $taller                = new Taller;
             $taller->nombre        = $request->nombre;
             $taller->razon_social  = $request->razon_social;
             $taller->codigo_sap    = $request->codigo_sap;
             $taller->email         = $request->email;
             $taller->rut           = $request->rut;
             $taller->telefono      = $request->telefono;
             $taller->movil         = $request->movil;
             $taller->direccion     = $request->direccion;
             $taller->decuento      = $request->decuento;
            // $taller->comentario    = $request->comentario;
             $taller->comuna_id          = (int)$request->comuna_id;
             $taller->region_id          = (int)$request->region_id;
             
             $taller->user_id            = 0;
             $taller->descuento          = $request->descuento;
             $taller->bonificacion       = $request->bonificacion;
             $taller->kilometro          = $request->kilometro;
             $taller->calefones          = $request->calefones;
             $taller->termos_electricos  = $request->termos_electricos;
             $taller->calderas           = $request->calderas;
             $taller->aire_acondicionado = $request->aire_acondicionado;
             $taller->estufas            = $request->estufas;
             $taller->solar              = $request->solar;
             $taller->eficiencia_energetica = $request->eficiencia_energetica;
 
            if($taller->save()){
                \Flash::success('Taller Creado con Exito.'); //<--FLASH MESSAGE
                return redirect("bosh/talleres");
            }else{
                return view("bosh.talleres.create",["taller" => $taller]);
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
        $taller   = Taller::find((int)$id);
        if(!$taller )
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

        $taller   = Taller::find($id);
        $user   = User::find($taller->user_id);

        if( !$taller ){
             \Flash::error('El Taller que busca no existe.');
            return redirect("/productos");
        }

        $comunaList = Comuna::pluck('nombre', 'id')->prepend('Selecciona una Comuna','');
        $usuarioList = User::pluck('username', 'id')->prepend('Selecciona una Usuario','');

        return view("bosh.talleres.edit",[
                                        "taller"      => $taller,
                                        "comunaList" => $comunaList,
                                        'user' =>  $user
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
        $taller   = Taller::find($id);

        if( !$taller ){
             \Flash::error('El Taller que busca no existe.');
            return redirect("/productos");
        }
         $taller->nombre  = $request->nombre;
         $taller->razon_social  = $request->razon_social;
         $taller->codigo_sap  = $request->codigo_sap;
         $taller->email  = $request->email;
         $taller->telefono  = $request->telefono;
         $taller->movil  = $request->movil;
         $taller->direccion  = $request->direccion;
         $taller->decuento  = $request->decuento;
         $taller->comentario  = $request->comentario;
         $taller->comuna_id = (int)$request->comuna_id;
         $taller->user_id  = (int)$request->user_id;

        if($taller->save()){
            \Flash::success('Taller Modificado con Exito.'); //<--FLASH MESSAGE
            return redirect("bosh.talleres");
        }else{
            return view("bosh.talleres.create",["taller" => $taller]);
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
