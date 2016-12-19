{!! Form::open(['url' => $url, 'method' => $method ]) !!}


  <div class="form-group">
      <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$repuesto->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>


  <div class="form-group">
      <label for="precio">Precio</label>
    {{ Form::number('precio',$repuesto->precio,['class' => 'form-control', 'placeholder' => 'Precio...'])  }}
  </div>

  <div class="form-group">
      <label for="codigo">Codigo</label>
    {{ Form::text('codigo',$repuesto->codigo,['class' => 'form-control', 'placeholder' => 'Codigo....'])  }}
  </div>

  <div class="form-group">
      <label for="stock">Stock</label>
    {{ Form::number('stock',$repuesto->stock,['class' => 'form-control', 'placeholder' => 'Stock...'])  }}
  </div>

  <div class="form-group">
      <label for="comentario">Comentario</label>
    {{ Form::textarea('comentario',$repuesto->comentario,['class' => 'form-control', 'placeholder' => 'Comentario...'])  }}
  </div>


  <div class="form-group text-right">
    <a href="{{url('/bosh/repuestos')}}"> Regresar al listado de Repuestos </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}

