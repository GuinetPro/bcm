@include('partials._error',[])

{!! Form::open(['url' => $url, 'method' => $method ]) !!}
  
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Escoge Direccion</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
          <select class="form-control">
            <option></option>
            @foreach  ($cliente->direcciones as $d)
              @if(  $producto_cliente->direccion_id == $d->id)
                <option value="{{$d->id}}" selected='selected'>{{$d->calle}} {{$d->numero}} {{$d->departamento}}</option>
              @else
                <option value="{{$d->id}}" >{{$d->calle}} {{$d->numero}} {{$d->departamento}}</option>
              @endif
            @endforeach         
          </select>
        </div>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Escoge Telefono</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
          <select class="form-control" name='telefono_id'>
            <option></option>
            @foreach  ($cliente->telefonos as $t)
              @if(  $visita->telefono_id == $t->id)
                <option value="{{$t->id}}" selected='selected'>{{$t->numero}}</option>
              @else
                <option value="{{$t->id}}" >{{$t->numero}}</option>
              @endif
            @endforeach         
          </select>
        </div>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Escoge un Producto</h3>
      </div>
      <div class="panel-body">
      <div class="form-group">
          <select class="form-control" name="producto_id">
            <option></option>
            @foreach  ($cliente->productos as $p)
              @if(  $producto_cliente->producto_id == $p->id)
                <option value="{{$p->id}}" selected='selected'>{{$p->nombre}}</option>
              @else
                <option value="{{$p->id}}" >{{$p->nombre}}</option>
              @endif
              
            @endforeach         
          </select>
        </div>
      </div>
    </div>

    </div>

    <div class="col-md-9">



  <div class="form-group text-right">
    <a href="{{url('/clientes/'.$cliente->id)}}"> Regresar a las Atenciones del cliente </a>
    <input type="submit" value="Editar" class="btn btn-success btn-lg">
    <input type="submit" value="Anular" class="btn btn-warning btn-lg">
    <input type="submit" value="Finalizar" class="btn btn-danger btn-lg">
  </div>

  
  <div class="form-group">
    <label for="nombre">Tipo de Atencion</label>
  	{!! Form::select('tipo_atencion_id', $tipoAtencion, $visita->tipo_atencion_id, ['class' => 'form-control']) !!}
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

  <div class="form-group">
    <label for="nombre">Descripcion</label>
    {{ Form::textarea('descripcion',$visita->descripcion,['class' => 'form-control', 'placeholder' => 'Descripcion...'])  }}
  </div>


	
  <h3 class="bg-primary">Taller y Atención</h3>


   <div class="form-group">
    <label for="nombre">Taller</label>
  	{!! Form::select('taller_id', $talleres, $visita->taller_id, ['class' => 'form-control']) !!}
  </div>


  <div class="form-group">
    <div class="row">
        <div class=" col-md-6">
            <label for="datetimepicker2">Fecha de Atencion</label>
            <input type="text" name="fecha_visita" id="datetimepicker5" value="<?php echo date('Y-m-d',strtotime($visita->fecha_visita)); ?>" class="form-control" data-plugin="datetimepicker" data-options="{format: 'DD-MM-YYYY' }">
        </div>              
        <div class=" col-md-6">
          <label for="datetimepicker2">Horario de Atencion</label>
            <input id="timepicker2" name="hora_visita" type="text" value="<?php echo date('H:i',strtotime($visita->fecha_visita)); ?>" class="form-control input-small" data-plugin="timepicker" data-options="{ showInputs: false, showMeridian: false }">
        </div>
    </div>

  </div>




{!! Form::close() !!}
