{!! Form::open(['url' => $url, 'method' => $method , 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}

  <div class="form-group">
    <label for="username">Username</label>
    {{ Form::text('username',$user->username,['id' => 'username','class' => 'form-control'])  }}
  </div>
  
  <div class="form-group">
    <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$user->nombre,['id' => 'nombre','class' => 'form-control'])  }}
  </div>
 
  <div class="form-group">
    <label for="apellidoPaterno">Apellido Paterno</label>
    {{ Form::text('apellidoPaterno',$user->apellidoPaterno,['id' => 'apellidoPaterno','class' => 'form-control'])  }}
  </div> 

  <div class="form-group">
    <label for="apellidoMaterno">Apellido Materno</label>
    {{ Form::text('apellidoMaterno',$user->apellidoMaterno,['id' => 'apellidoMaterno','class' => 'form-control'])  }}
  </div> 

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" type="password" class="form-control" name="password" required>
  </div>
   
    <div class="form-group">
    <label for="password_confirmation">Confirmar Password</label>
    <input type="password" id="password_confirmation" type="password_confirmation" class="form-control" name="password_confirmation" required>
  </div>
  
  <div class="form-group">
    <label for="email">Email</label>
    {{ Form::email('email',$user->email,['id' => 'email','class' => 'form-control', 'placeholder' => 'ejemplo@hotmail.com'])  }}
  </div>

  <div class="form-group">
    <label for="rol_id">Rol</label>
    {!! Form::select('rol_id', $roles, $user->rol_id, ['class' => 'form-control']) !!}
  </div>



<div class="form-group">
   @if  ( $user->imagen != "" )
    <img src="{{ url('imagenes', [$user->imagen])  }}">
   @endif 

  </div>




  <div class="form-group text-right">
    <a href="{{url('/bosh/usuarios')}}"> Regresar al listado de Usuarios </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}
