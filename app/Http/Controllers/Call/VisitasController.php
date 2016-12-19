<?php

namespace App\Http\Controllers\Call;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
          $visitas = Visita::all();
         return view("visitas.index",["visitas" => $visitas]);
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
        
        $fecha = date('Y-m-d',strtotime($request->fecha_visita));

        $hora = date("H:i:s",strtotime($request->hora_visita)) ;
  

        $proCliente = ProductoCliente::Where( ["producto_id" => $request->producto_id,"cliente_id" => $request->cliente_id])->first();

        $visita   = new Visita;
        $visita->tipo_atencion_id           = $request->tipo_atencion_id;
        $visita->taller_distribuidor_id     = $request->taller_distribuidor_id;
        $visita->trabajo_realizar_id        = $request->tipo_trabajo_id;
        $visita->solicitante_id             = $request->solicitante_id;
        $visita->tipo_presupuesto_id        = $request->tipo_presupuesto_id;
        $visita->nomina_tienda_id           = $request->nomina_tienda_id;
        $visita->fecha_visita               = $fecha.' '. $hora;
        $visita->taller_id                  = $request->taller_id;
        $visita->descripcion                = $request->descripcion;
        $visita->cliente_id                 = $request->cliente_id;
        $visita->producto_cliente_id        = $proCliente->id;
        $visita->comentario_tecnico         = "";
        $visita->num_boleta                 = "";
        $visita->mano_obra                  = 0;
        $visita->abono                      = 0;
        $visita->total                      = 0;
        $visita->pendiente                  = 0;
        $visita->anu_usuario                = "";
        $visita->anu_solicitante            = "";
        $visita->anu_rut                    = "";
        $visita->anu_obs                    = "";
        $visita->gasfitero_id               = 0;
        $visita->telefono_id                = $request->telefono_id;
        $visita->estado_id                  = 1;
        $visita->servicio_realizado_id      = 0;
        $visita->user_id                    = \Auth::user()->id;

        if($visita->save()){
            \Flash::success('Visita Creada con Exito.'); //<--FLASH MESSAGE
            return redirect("/clientes/".$request->cliente_id);
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


        $visita = Visita::find($id);

        if( !$visita ){
             \Flash::error('La Visita que busca no existe.');
            return redirect("/clientes");
        }else{


        $tipoAtencion = TipoAtencion::pluck('nombre', 'id')->prepend('Selecciona una Atencion','');
        $taller_dist  = TallerDistribuidor::pluck('distribuidor', 'id')->prepend('Selecciona un Distribuidor','');
        $trabajo_re   = TrabajoRealizar::pluck('trabajo', 'id')->prepend('Selecciona un Trabajo','');
        $solicitantes = Solicitante::pluck('solicitante', 'id')->prepend('Selecciona un Solicitante','');
        $tipo_pre     = TipoPresupuesto::pluck('presupuesto', 'id')->prepend('Selecciona un Tipo Presupuesto','');
        $nomina       = NominaTienda::pluck('tienda', 'id')->prepend('Selecciona una Nomina','');
         $talleres       = Taller::pluck('nombre', 'id')->prepend('Selecciona un Taller','');


        $cliente = Cliente::find((int)$visita->cliente_id);

        $producto_cliente = ProductoCliente::find((int)$visita->producto_cliente_id);


            return view("visitas.edit",["visita" => $visita,'cliente'=> $cliente,
                                        'tipoAtencion' =>$tipoAtencion, 
                                        'taller_dist' => $taller_dist, 
                                        'trabajo_re' => $trabajo_re,
                                        'solicitantes' => $solicitantes,  
                                        'tipo_pre'=> $tipo_pre,  
                                        'nomina'  =>  $nomina,
                                        'talleres' =>  $talleres,
                                        'producto_cliente'=>$producto_cliente]);
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
