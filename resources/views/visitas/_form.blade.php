@include('partials._error',[])

{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    {{ Form::textarea('comentario',$visita->comentario,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>


{!! Form::close() !!}
