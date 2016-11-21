<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Visita;
use App\Model\Cliente;
use App\Model\TipoPago;
use App\Model\TallerDistribuidor;
use App\Model\TrabajoRealizar;
use App\Model\Solicitante;
use App\Model\TipoPresupuesto;
use App\Model\NominaTienda;
use App\Model\Taller;

class VisitasController extends Controller
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
    public function create(Request $request)
    {
        $visita  = new Visita;

        $tipoAtencion = TipoPago::pluck('nombre', 'id')->prepend('Selecciona una Atencion','');
        $taller_dist  = TallerDistribuidor::pluck('distribuidor', 'id')->prepend('Selecciona un Distribuidor','');
        $trabajo_re   = TrabajoRealizar::pluck('trabajo', 'id')->prepend('Selecciona un Trabajo','');
        $solicitantes = Solicitante::pluck('solicitante', 'id')->prepend('Selecciona un Solicitante','');
        $tipo_pre     = TipoPresupuesto::pluck('presupuesto', 'id')->prepend('Selecciona un Tipo Presupuesto','');
        $nomina       = NominaTienda::pluck('tienda', 'id')->prepend('Selecciona una Nomina','');
         $talleres       = Taller::pluck('nombre', 'id')->prepend('Selecciona un Taller','');


        $cliente = Cliente::find((int)$request->input('cliente_id'));

        if (!$cliente) {
             \Flash::error('El Cliente que busca no existe.');
            return redirect()->back();
        }
      

        return view("visitas.create",["visita" => $visita,'cliente'=> $cliente,'tipoAtencion' =>$tipoAtencion, 'taller_dist' => $taller_dist, 'trabajo_re' => $trabajo_re,
    'solicitantes' => $solicitantes,  'tipo_pre'=> $tipo_pre,  'nomina'  =>  $nomina,'talleres' =>  $talleres]);
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
