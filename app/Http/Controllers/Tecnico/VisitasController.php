<?php

namespace App\Http\Controllers\Tecnico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Visita;
use App\Model\Gasfitero;
use App\Model\Cliente;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $gasfitero = Gasfitero::where(['user_id'=>Auth::user()->id])->first();

        $visitas = Visita::where(['gasfitero_id'=>$gasfitero->id,'estado_id'=>1])->get();



        return view("tecnico.visitas.index",["visitas" => $visitas]);
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
         $visita = Visita::find($id);

        if( !$visita ){
             \Flash::error('La Visita que busca no existe.');
            return redirect("/clientes");
        }else{
            $cliente = Cliente::find((int)$visita->cliente_id);
            return view("tecnico.visitas.edit",["visita" => $visita,'cliente'=> $cliente]);

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
