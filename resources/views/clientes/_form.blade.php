{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    {{ Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>

  <div class="form-group">
    {{ Form::text('rut',$cliente->rut,['class' => 'form-control', 'placeholder' => 'Rut de tu cliente'])  }}
  </div>

  <div class="form-group">
    {{ Form::textarea('comentario',$cliente->comentario,['class' => 'form-control', 'placeholder' => 'Describe tu cliente...'])  }}
  </div>
  
  <div class="form-group text-right">
    <a href="{{url('/products')}}"> Regresar al listado de productos </a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>

{!! Form::close() !!}