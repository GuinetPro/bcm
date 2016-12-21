{!! Form::open(['url' => $url, 'method' => $method , 'files' => true, 'enctype' => 'multipart/form-data' ]) !!}
<div class="row">
  <div class="col-md-6">
      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small> Datos Usuario</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        <div class="widget-body clearfix">

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



        </div>
      </div>  
  </div>
     
<div class="col-md-6">
       <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Rol</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        <div class="widget-body clearfix">
          <div class="form-group">
            <label for="rol_id">Rol</label>
            {!! Form::select('rol_id', $roles, $user->rol_id, ['class' => 'form-control','ng-init' => "rol_id='".$user->rol_id."'",'ng-model' => 'rol_id','ng-change' => 'relacionarRol()']) !!}
          </div>

        </div>
      </div> 
       
      <div class="widget stats-widget">
        <header class="widget-footer bg-primary">
            <small>Relacion Taller</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
        </header>
        <div class="widget-body clearfix">

  <div class="form-group">
    <label for="taller_id">Lider Taller</label>
    {!! Form::select('taller_id', $tallerList, $user->taller_id, ['class' => 'form-control','ng-disabled'=>'rol_tecnico']) !!}
  </div>

  <div class="form-group">
    <label for="taller_id">Taller Asociado</label>
    {!! Form::select('taller_asociado', $tallerList, $user->taller_asociado, ['id'=>'taller_asociado','class' => 'form-control']) !!}
    <br/>
    <span class="btn btn-warning pull-right" ng-click="relacionarTaller();">Agregar</span>
    <br/>
    <br/>
    <div class="list-group">
        <span  class="list-group-item disabled" ng-repeat="t in talleres">
        <% t.nombre %>
        <input type="hidden" name="asoc[id][]" value="<% t.id %>">
        </span>
    </div>
  </div>


  <div class="form-group">
   @if  ( $user->imagen != "" )
    <img src="{{ url('imagenes', [$user->imagen])  }}">
   @endif 

  </div>

        </div>
      </div>        
  </div>
</div>     








  <div class="form-group text-right">
    <a href="{{url('/bosh/usuarios')}}"> Regresar al listado de Usuarios </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}
