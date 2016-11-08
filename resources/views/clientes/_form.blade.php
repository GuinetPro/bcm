{!! Form::open(['url' => $url, 'method' => $method ]) !!}

  <div class="form-group">
    {{ Form::text('nombre',$cliente->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
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
        Direcciones
        <span class='btn btn-info pull-right'  data-toggle="modal" data-target="#modalDireccion">Agregar</span>
      </div>
      <div class="panel-body">
        
        <table class='table'>
          <tr>
            <td>
              <input class="form-control" placeholder="Direccion" name="telefon[]" type="text">
            </td>
            <td>
             <input class="form-control" placeholder="Comuna" name="telefon[]" type="text">
            </td>
            <td> 
              <span class='btn btn-warning'>Editar</span>
              <span class='btn btn-danger'>Eliminar</span>
            </td>
          </tr>
        </table>  

      </div>
    </div>

  </div>

  <div class="form-group">

    <div class="panel panel-default">
      <div class="panel-heading">
          Telefonos
          <span class='btn btn-info pull-right' data-toggle="modal" data-target="#modalTelefono">Agregar</span>
      </div>
      <div class="panel-body">   

        <table class='table'>
          <tr>
            <td>
              <input class="form-control" placeholder="Numero" name="telefon[]" type="text">
            </td>
            <td>
              <input type="checkbox" value="">Principal
            </td>
            <td> 
              <span class='btn btn-warning'>Editar</span>
              <span class='btn btn-danger'>Eliminar</span>
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


<!-- Modal Direccion -->
@include('direccion._formModal',[])

<!-- Modal Telefono -->
@include('telefono._formModal',[])