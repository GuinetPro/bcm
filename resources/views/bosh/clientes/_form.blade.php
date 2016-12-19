{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    {{ Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>

  <div class="form-group">
    {{ Form::text('apellidoPaterno',$cliente->apellidoPaterno,['class' => 'form-control', 'placeholder' => 'Apellido Paterno...'])  }}
  </div>


    <div class="form-group">
    {{ Form::text('apellidoMaterno',$cliente->apellidoMaterno,['class' => 'form-control', 'placeholder' => 'Apellido Materno...'])  }}
  </div>


  <div class="form-group">
    {{ Form::text('rut',$cliente->rut,['class' => 'form-control', 'placeholder' => 'Rut de tu cliente'])  }}
  </div>

  <div class="form-group">
    {{ Form::email('email',$cliente->email,['class' => 'form-control', 'placeholder' => 'ejemplo@hotmail.com'])  }}
  </div>


  <div class="form-group">

    <div class="panel panel-default">
      <div class="panel-heading">
        Direcciones (<% direcciones.length  %>)
        <span class='btn btn-info pull-right'  ng-click="agregarDireccion()"><% btnDireccion %></span>
      </div>
      <div class="panel-body">
        
        <div class="row"  id="div_form_direccion">
            <!-- Modal Direccion -->
            @include('direccion._form',[])
        </div>

        <table class='table'>
          <tr ng-repeat="dir in direcciones">
            <td>
              <% dir.interior %> <% dir.calle %> <% dir.numero  %> <% '#'+dir.dpt  %> (<% dir.comuna.nombre %> )
            </td>
            <td> 
           
              <input type="hidden" name="dir[region][]" value="<% dir.region.id %>">
              <input type="hidden" name="dir[comuna][]" value="<% dir.comuna.id %>">
              <input type="hidden" name="dir[interior][]" value="<% dir.interior %>">
              <input type="hidden" name="dir[calle][]" value="<% dir.calle %>">
              <input type="hidden" name="dir[numero][]" value="<% dir.numero %>">
              <input type="hidden" name="dir[fijo][]" value="<% dir.fijo %>">
              <input type="hidden" name="dir[dpt][]" value="<% dir.dpt %>">
              <input type="hidden" name="dir[id][]" value="<% dir.id %>">
              <input type="hidden" name="dir[latitud][]" value="<% dir.latitud %>">
              <input type="hidden" name="dir[longitud][]" value="<% dir.longitud %>">

              <span class='btn btn-warning'><i class="fa fa-pencil" aria-hidden="true"></i></span>
              <span  ng-click="deleteDir(dir)" class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i></span>
            </td>
          </tr>
        </table>  

      </div>
    </div>

  </div>

  <div class="form-group">

    <div class="panel panel-default">
      <div class="panel-heading">
          Telefonos (<% telefonos.length  %>)
          <span class='btn btn-info pull-right' ng-click="agregarTelefono()"><% btnTelefono %></span>
      </div>
      <div class="panel-body">   
          <div class="row"  id="div_form_telefono">
            <div class="col-md-12">
                <!-- Modal Telefono -->
                @include('telefono._form',[])
            </div>
          </div>

        <table class='table'>
          <tr ng-repeat="tel in telefonos">
            <td>
              <input type="text" name="tel[numero][]" value="<% tel.numero %>">
              <input type="hidden" name="tel[id][]" value="<% tel.id %>">
              <input type="hidden" name="tel[desc][]" value="<% tel.desc %>">
              <input type="hidden" name="tel[prin][]" value="<% tel.principal %>">
            </td>
            <td>
              <input type="radio"  name="principal"   ng-checked="tel.principal">Principal

            </td>
            <td> 
              <span ng-click="deleteTel(tel)" class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i></span>
            </td>
          </tr>
        </table>   

      </div>
    </div>

  </div>

  <div class="form-group">
    {{ Form::textarea('comentario',$cliente->comentario,['class' => 'form-control', 'placeholder' => 'Describe tu cliente...'])  }}
  </div>
  
  <div class="form-group text-right">
    <a href="{{url('/clientes')}}"> Regresar al listado de Clientes </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>

{!! Form::close() !!}


@include('direccion._script',[])