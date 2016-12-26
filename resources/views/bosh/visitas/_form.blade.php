@include('partials._error',[])

{!! Form::open(['url' => $url, 'method' => $method ]) !!}
<div class="row">
  <div class="col-md-3">
      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small> Detalle cliente</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        <div class="widget-body clearfix">

          <table class="table table-striped">
            <tr>
              <td>Nombre Completo </td>
              <td>
                {{ $cliente->nombre.' '.$cliente->apellidoPaterno.' '.$cliente->apellidoMaterno  }}
              </td>
            </tr>

            <tr>
              <td>Rut/DV</td>
              <td>
                {{ $cliente->rut }}
              </td>
            </tr>

            <tr>
              <td>Email</td>
              <td>
                {{ $cliente->email }}
              </td>
            </tr>

          </table>
         </div>
      </div> 


       <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Escoge Direccion</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">
          <div class="form-group">
            <select class="form-control" name='direccion_id'>
              <option></option>
              @foreach  ($cliente->direcciones as $d)
                <option value="{{$d->id}}">{{$d->calle}} ({{$d->comuna->nombre}})</option>
              @endforeach         
            </select>
          </div>
        </div>    
      </div> 


      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Escoge Telefono</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">
          <div class="form-group">
            <select class="form-control" name='telefono_id'>
              <option></option>
              @foreach  ($cliente->telefonos as $t)
                <option value="{{$t->id}}">{{$t->numero}}</option>
              @endforeach         
            </select>
          </div>
        </div>    
      </div> 

      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Escoge un Producto</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">
          <div class="form-group">
            <select class="form-control" name="producto_id">
              <option></option>
              @foreach  ($cliente->productos as $p)
                <option value="{{$p->id}}">{{$p->nombre}}</option>
              @endforeach         
            </select>
          </div>
          <span class="btn btn-warning pull-right">Nuevo Producto</span>

        </div>    
      </div> 



  </div>

  <div class="col-md-3">
  
      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Detalle Producto</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">
        
          <div class="form-group">
            <label for="nombre">Fecha de Compra </label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="nombre">Lugar de compra </label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="nombre">Marca</label>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="nombre">Tipo de Producto   </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Litraje  </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Especificacion   </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Tipo de Gas  </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Tiro   </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Modelos  </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Cdgo Modelos   </label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="nombre">Fabrica </label>
            <input type="text" class="form-control">
          </div>


        </div>    
      </div> 


  </div>

  <div class="col-md-6">

      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Nueva Atencion</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">

          {!! Form::hidden('cliente_id', $cliente->id, $visita->cliente_id, ['class' => 'form-control']) !!}

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

      </div> 

  </div> 
          

      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Taller y Atención</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        
        <div class="widget-body clearfix">

          <div class="form-group">
            <label for="nombre">Taller</label>
            {!! Form::select('taller_id', $talleres, $visita->taller_id, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
            <div class="row">
                <div class=" col-md-6">
                    <label for="datetimepicker2">Fecha de Atencion</label>
                    <input type="text" name="fecha_visita" id="datetimepicker5" class="form-control" data-plugin="datetimepicker" data-options="{format: 'DD-MM-YYYY' }">
                </div>              
                <div class=" col-md-6">
                  <label for="datetimepicker2">Horario de Atencion</label>
                    <input id="timepicker2" name="hora_visita" type="text" class="form-control input-small" data-plugin="timepicker" data-options="{ showInputs: false, showMeridian: false }">
                </div>
            </div>

          </div>

        </div> 

      </div> 
         
   </div> 

  </div> 


  <div class="form-group text-right">
    <a href="{{url('clientes/'.$cliente->id)}}"> Regresar al listado de Visitas </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}
