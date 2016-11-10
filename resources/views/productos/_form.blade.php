@include('partials._error',[])


{!! Form::open(['url' => $url, 'method' => $method , 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}



  <div class="form-group">
    <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$producto->nombre,['id' => 'nombre','class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>
  
  <div class="form-group">
    <label for="precio">Precio</label>
    {{ Form::text('precio',$producto->precio,['id' => 'precio','class' => 'form-control', 'placeholder' => 'Precio...'])  }}
  </div>

  <div class="form-group">
    <label for="nombre">Codigo</label>
    {{ Form::text('codigo',$producto->codigo,['id' => 'codigo','class' => 'form-control', 'placeholder' => 'Codigo...'])  }}
  </div>

  <div class="form-group">
    <label for="nombre">Categoria</label>
  	{!! Form::select('categoria_id', $categoriaList, $producto->categoria_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Marca</label>
  	{!! Form::select('marca_id', $marcaList, $producto->marca_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Modelo</label>
  	{!! Form::select('modelo_id', $modeloList, $producto->modelo_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Tipo Gas</label>
  	{!! Form::select('tipo_gas_id', $tipo_gasList, $producto->tipo_gas_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Tiro</label>
  	{!! Form::select('tiro_id', $tiroList, $producto->tiro_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Litraje</label>
  	{!! Form::select('litraje_id', $litrajeList, $producto->litraje_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="nombre">Imagen</label>
    {!! Form::file('imagen', array('class' => 'form-control')) !!}
  </div>





  <div class="form-group text-right">
    <a href="{{url('/productos')}}"> Regresar al listado de Productos </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}
