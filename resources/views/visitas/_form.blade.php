@include('partials._error',[])

{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    <label for="nombre">Tipo de Atencion</label>
  	{!! Form::select('tipo_pago_id', $tipoAtencion, $visita->tipo_pago_id, ['class' => 'form-control']) !!}
  </div>


  <div class="form-group">
    <label for="nombre">Taller/Distribuidor</label>
  	{!! Form::select('taller_distribuidor_id', $taller_dist, $visita->taller_distribuidor_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Trabajo a Realizar</label>
  	{!! Form::select('tipo_trabajo_id', $trabajo_re, $visita->tipo_trabajo_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Solicitante</label>
  	{!! Form::select('solicitante_id', $solicitantes, $visita->solicitante_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Tipo de Presupuesto</label>
  	{!! Form::select('tipo_presupuesto_id', $tipo_pre, $visita->tipo_presupuesto_id, ['class' => 'form-control']) !!}
  </div>

   <div class="form-group">
    <label for="nombre">Nomina de Tiendas</label>
  	{!! Form::select('nomina_tienda_id', $nomina, $visita->nomina_tienda_id, ['class' => 'form-control']) !!}
  </div>
	
  <h3 class="bg-primary">Taller y Atención</h3>

  <div class="form-group">
    <label for="nombre">Fecha de Atencion</label>
    {{ Form::text('fecha_visita',$visita->fecha_visita,['id' => 'nombre','class' => 'form-control', 'placeholder' => 'Fecha'])  }}
  </div>

   <div class="form-group">
    <label for="nombre">Taller</label>
  	{!! Form::select('taller_id', $talleres, $visita->taller_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Horario de Atencion</label>
    {{ Form::text('fecha_visita',$visita->fecha_visita,['id' => 'nombre','class' => 'form-control', 'placeholder' => 'Fecha'])  }}
  </div>


{!! Form::close() !!}
