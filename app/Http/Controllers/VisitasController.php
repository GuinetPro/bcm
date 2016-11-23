<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Visita;
use App\Model\Cliente;
use App\Model\TipoAtencion;
use App\Model\TallerDistribuidor;
use App\Model\TrabajoRealizar;
use App\Model\Solicitante;
use App\Model\TipoPresupuesto;
use App\Model\NominaTienda;
use App\Model\Direccion;
use App\Model\Taller;
use App\Model\ProductoCliente;


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

        $tipoAtencion = TipoAtencion::pluck('nombre', 'id')->prepend('Selecciona una Atencion','');
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

//dd($request->producto_id);

        $proCliente = ProductoCliente::Where( ["producto_id" => $request->producto_id,"cliente_id" => $request->cliente_id])->first();

        $visita   = new Visita;
        $visita->tipo_atencion_id           = $request->tipo_atencion_id;
        $visita->taller_distribuidor_id = $request->taller_distribuidor_id;
        $visita->tipo_trabajo_id        = $request->tipo_trabajo_id;
        $visita->solicitante_id      = $request->solicitante_id;
        $visita->tipo_presupuesto_id = $request->tipo_presupuesto_id;
        $visita->nomina_tienda_id = $request->nomina_tienda_id;
        $visita->fecha_visita     = $request->fecha_visita;
        $visita->taller_id        = $request->taller_id;
        $visita->descripcion      = $request->descripcion;
        $visita->cliente_id       = $request->cliente_id;
        $visita->producto_cliente_id= $proCliente->id;
        //$visita->tipo_trabajo       = 0;

        if($visita->save()){
            \Flash::success('Visita Creada con Exito.'); //<--FLASH MESSAGE
            return redirect("clientes/".$request->cliente_id);
        }else{
            return view("visitas.create",["producto" => $visita]);
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
