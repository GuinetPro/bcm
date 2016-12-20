{!! Form::open(['url' => $url, 'method' => $method ]) !!}
  
  <h2 class="bg-primary">
    Datos del Gasfiter
  </h2>

  <div class="form-group">
    <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$gasfiter->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>

  <div class="form-group">
    <label for="nombre">Apellidos</label>
    {{ Form::text('apellidos',$gasfiter->apellidos,['class' => 'form-control', 'placeholder' => 'Apellidos...'])  }}
  </div>

  <div class="form-group">
    <label for="rut">Rut</label>
    {{ Form::text('rut',$gasfiter->rut,['class' => 'form-control', 'placeholder' => ''])  }}
  </div>

  <div class="form-group">
      <label for="Email">Email</label>
    {{ Form::email('email',$gasfiter->email,['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com'])  }}
  </div>

  <div class="form-group">
    <label for="region" >Region</label>
    <select  type="text" id="region_id" name="region_id" class="form-control" ng-model="region" ng-change="loadComuna(region)">          
      <option ng-repeat="r in regiones" value="<% r %>"><% r.codigo %> <% r.nombre %></option>
    </select>
    <p ng-show="formDireccion.region.$invalid &&  submitted" class="help-block">La Region es Obligatoria.</p>
  </div>

  <div class="form-group">
      <label for="comuna_id">Comuna</label>
      <select  id="comuna_id" type="text" class="form-control" name="comuna_id" ng-model="comuna">
          <option ng-repeat="c in comunasSelector" value="<% c %>"><% c.nombre %></option>
      </select>
      <p ng-show="formDireccion.region.$invalid &&  submitted" class="help-block">La Comuna es Obligatoria.</p>
  </div>

  <div class="form-group">
    <label for="telefono">Direccion</label>
    {{ Form::text('direccion',$gasfiter->direccion,['class' => 'form-control'])  }}
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
    <label for="taller_id">Taller</label>
    {!! Form::select('taller_id', $tallerList, $gasfiter->taller_id, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
   <label for="movil">Descuento</label>
    {!! Form::select('descuento', [0,5,10,15,20,25], $gasfiter->descuento, ['class' => 'form-control']) !!}
  </div>

  
  <div class="form-group text-right">
    <a href="{{url('/bosh/gasfiteros')}}"> Regresar al listado de Gasfiters </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>


{!! Form::close() !!}


