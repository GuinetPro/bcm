{!! Form::open(['url' => $url, 'method' => $method ]) !!}
  
  <h2 class="bg-primary">
    Datos del Gasfiter
  </h2>

  <div class="form-group">
    <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$gasfiter->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>


  <div class="form-group">
      <label for="Email">Email</label>
    {{ Form::email('email',$gasfiter->email,['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com'])  }}
  </div>

  <div class="form-group">
  <label for="telefono">Telefono</label>
    {{ Form::tel('telefono',$gasfiter->telefono,['class' => 'form-control phone', 'placeholder' => '09 7776543'])  }}
  </div>

  <div class="form-group">
   <label for="movil">Movil</label>
    {{ Form::tel('movil',$gasfiter->movil,['class' => 'form-control phone', 'placeholder' => '09 7776543'])  }}
  </div>

  <div class="form-group">
    {{ Form::textarea('Comentario',$gasfiter->comentario,['class' => 'form-control', 'placeholder' => 'Comentario...'])  }}
  </div>

  <div class="form-group">
    <label for="taller_id">Taller</label>
    {!! Form::select('taller_id', $tallerList, $gasfiter->taller_id, ['class' => 'form-control']) !!}
  </div>



  <h2 class="bg-primary">
    Usuario Asociado
  </h2>

  <div class="form-group">
    <label for="username" class="col-md-4 control-label">Usuario </label>
    {{ Form::text('Username',$user->username,['class' => 'form-control', 'placeholder' => 'Username'])  }}
  </div>

  <div class="form-group">
   <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    {{ Form::email('Email',$user->email,['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com'])  }}
  </div>

  <div class="form-group">
    <label for="password" class="col-md-4 control-label">Password</label>
     <input id="password" type="password" class="form-control" name="Password" required>
  </div>


  <div class="form-group text-right">
    <a href="{{url('/bosh/gasfiteros')}}"> Regresar al listado de Gasfiters </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}


