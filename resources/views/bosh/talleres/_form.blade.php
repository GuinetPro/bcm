{!! Form::open(['url' => $url, 'method' => $method ]) !!}
  <h2 class="bg-primary">
    Datos del Taller
  </h2>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    {{ Form::text('nombre',$taller->nombre,['class' => 'form-control', 'placeholder' => 'Nombre...'])  }}
  </div>


  <div class="form-group">
    <label for="Razon Social">Razon Social</label>
    {{ Form::text('razon_social',$taller->razon_social,['class' => 'form-control', 'placeholder' => 'Razon Social...'])  }}
  </div>

  <div class="form-group">
    <label for="Rut">rut</label>
    {{ Form::text('rut',$taller->rut,['class' => 'form-control', 'placeholder' => 'Rut...'])  }}
  </div>

  <div class="form-group">
    <label for="Codigo Sap">Codigo Sap</label>
    {{ Form::text('Codigo_Sap',$taller->codigo_sap,['class' => 'form-control', 'placeholder' => 'Codigo Sap...'])  }}
  </div>

  <div class="form-group">
    <label for="Email">Email</label>
    {{ Form::email('email',$taller->email,['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com'])  }}
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
    {{ Form::tel('telefono',$taller->telefono,['class' => 'form-control phone', 'placeholder' => '09 7776543'])  }}
  </div>

  <div class="form-group">
    <label for="movil">Movil</label>
    {{ Form::tel('movil',$taller->movil,['class' => 'form-control phone', 'placeholder' => '09 7776543'])  }}
  </div>

  <div class="form-group">
    <label for="region_id">Region</label>
        <select  type="text" id="region_id" name="region_id" class="form-control" ng-model="region" ng-change="loadComuna(region)">          
            <option ng-repeat="r in regiones" value="<% r %>"><% r.codigo %> <% r.nombre %></option>
        </select>  
 </div>

  <div class="form-group">
    <label for="comuna_id">Comuna</label>
    <select  id="comuna" type="text" class="form-control" name="comuna_id" ng-model="comuna">
       <option ng-repeat="c in comunasSelector" value="<% c.id %>"><% c.nombre %></option>
    </select>
  </div>

  <div class="form-group">
     <label for="Direccion">Direccion</label>
    {{ Form::text('direccion',$taller->direccion,['class' => 'form-control', 'placeholder' => 'Direccion...'])  }}
  </div>



  <h2 class="bg-primary">
    Tarifa Repuestos
  </h2>


  <div class="form-group">
    <label for="decuento" class="col-md-4 control-label">Descuento Repuestos </label>
    {{ Form::number('decuento',$taller->decuento,['class' => 'form-control', 'placeholder' => ''])  }}
  </div>

  <div class="form-group">
    <label for="bonificacion" class="col-md-4 control-label">Bonificacion de Repuesto  </label>
    {{ Form::number('bonificacion',$taller->bonificacion,['class' => 'form-control', 'placeholder' => ''])  }}
  </div>

  <div class="form-group">
    <label for="kilometro" class="col-md-4 control-label">Kilometro </label>
    {{ Form::text('kilometro',$taller->kilometro,['class' => 'form-control', 'placeholder' => ''])  }}
  </div>  

  <h2 class="bg-primary">
    Descuento Productos
  </h2>

  <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Calefones </label>
    {{ Form::text('calefones',$taller->calefones,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 

  <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Termos Electricos </label>
    {{ Form::text('termos_electricos',$taller->termos_electricos,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 

  <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Calderas </label>
    {{ Form::text('calderas',$taller->calderas,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 


 <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Aire Acondicionado </label>
    {{ Form::text('aire_acondicionado',$taller->aire_acondicionado,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 


 <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Estufas</label>
    {{ Form::text('estufas',$taller->estufas,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 


 <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Solar</label>
    {{ Form::text('solar',$taller->solar,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 

 <div class="form-group">
    <label for="calefones" class="col-md-4 control-label">Eficiencia Energetica</label>
    {{ Form::text('eficiencia_energetica',$taller->eficiencia_energetica,['class' => 'form-control', 'placeholder' => ''])  }}
  </div> 



  <div class="form-group text-right">
    <a href="{{url('/bosh/talleres')}}"> Regresar al listado de Talleres </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>




{!! Form::close() !!}










