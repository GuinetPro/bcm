@include('partials._error',[])


{!! Form::open(['url' => $url, 'method' => $method , 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}

  <div class="form-group">
    <label for="modelo">Modelo</label>
    {{ Form::text('modelo',$producto->modelo,['id' => 'modelo','class' => 'form-control', 'placeholder' => 'Modelo...'])  }}
  </div>
  
  <div class="form-group">
    <label for="nombre">Categoria</label>
    {!! Form::select('categoria_id', $categoriaList, $producto->categoria_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Código del modelo</label>
    {{ Form::text('codigo',$producto->codigo,['id' => 'codigo','class' => 'form-control', 'placeholder' => 'Codigo...'])  }}
  </div>
 
  <div class="form-group">
    <label for="nombre">Marca</label>
    {!! Form::select('marca_id', $marcaList, $producto->marca_id, ['id' => 'marca_id','class' => 'form-control','ng-model'  => 'marca' ,'ng-change'  => 'loadTipoProductos()','ng-init'  => "marca='". $producto->marca_id."'"
    ]) !!}
  </div>



  <div class="form-group">
    <label for="nombre">Tipo de Productos</label>
    <select  ng-init="tipo_producto='{{$producto->tipo_producto_id}}'" ng-change="loadLitrajes()" id="tipo_producto_id" type="text" class="form-control" name="tipo_producto_id" ng-model="tipo_producto">
        @if ($producto->id > 0)
            <option value="{{$producto->tipo_producto_id}}">{{$producto->tipoproducto->nombre}}</option>
        @endif
        <option ng-repeat="t in tipoProductos" value="<% t.id %>"><% t.nombre %></option>
    </select>
  </div>


  <div class="form-group">
    <label for="nombre">Litraje</label>
    <select  ng-init="litraje='{{$producto->litraje_id}}'" ng-change="loadTipoGas()" id="litraje_id" type="text" class="form-control" name="litraje_id" ng-model="litraje">
        @if ($producto->id > 0)
            <option value="{{$producto->litraje_id}}">{{$producto->litraje->lts}}</option>
        @endif       
        <option ng-repeat="l in litrajeList" value="<% l.id %>"><% l.lts %></option>
    </select>
  </div>


  <div class="form-group">
    <label for="nombre">Tipo Gas</label>
    <select  ng-init="tipo_gas='{{$producto->tipo_gas_id}}'" ng-change="loadTiro()" id="tipo_gas_id" type="text" class="form-control" name="tipo_gas_id" ng-model="tipo_gas">
        @if ($producto->id > 0)
            <option value="{{$producto->tipo_gas_id}}">{{$producto->tipoGas->nombre}}</option>
        @endif 
        <option ng-repeat="g in tipoGasList" value="<% g.id %>"><% g.nombre %></option>
    </select>
  </div>


  <div class="form-group">
    <label for="nombre">Evacuación de gas</label>
    <select  ng-init="tiro='{{$producto->tiro_id}}'"  id="tiro_id" type="text" class="form-control" name="tiro_id" ng-model="tiro">
        @if ($producto->id > 0)
            <option value="{{$producto->tiro_id}}">{{$producto->tiro->nombre}}</option>
        @endif 
        <option ng-repeat="t in tiroList" value="<% t.id %>"><% t.nombre %></option>
    </select>
  </div>



  <div class="form-group">
    <label for="nombre">Planta</label>
    {!! Form::select('tipo_planta_id', $plantaList, $producto->tipo_planta_id, ['class' => 'form-control']) !!}
  </div>


  <div class="form-group">
    <label for="nombre">Especificación</label>
  	{!! Form::select('tipo_especificacion_id', $tipoEspecificacionList, $producto->tipo_especificacion_id, ['class' => 'form-control']) !!}
  </div>



  <div class="form-group">
    <label for="nombre">Imagen</label>
    {!! Form::file('imagen', array('class' => 'form-control')) !!}
  </div>


<div class="form-group">
   @if  ( $producto->imagen != "" )
    <img src="{{ url('imagenes', [$producto->imagen])  }}">
   @endif 

  </div>




  <div class="form-group text-right">
    <a href="{{url('/bosh/productos')}}"> Regresar al listado de Productos </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}
