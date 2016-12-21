{!! Form::open(['url' => $url, 'method' => $method ]) !!}
  
<div class="row">
    <div class="col-md-6">
        <div class="widget stats-widget">
          <header class="widget-footer bg-primary">
            <small> Datos del Taller</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
          </header>
          <div class="widget-body clearfix">
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

          </div>
        </div><!-- .widget -->
    </div>

    <div class="col-md-6">
        <div class="widget stats-widget">
          <header class="widget-footer bg-primary">
            <small>Tarifa Repuestos</small>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
          </header>
          <div class="widget-body clearfix">
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
          </div>
        </div><!-- .widget -->

        <div class="widget stats-widget">
            <header class="widget-footer bg-primary">
              <small>Descuento Productos</small>
              <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
            </header>

           <div class="widget-body clearfix">
            
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
          </div>
        </div>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="widget stats-widget">
          <header class="widget-footer bg-primary">
            <small>Coberturas</small><button class="btn btn-info pull-right" ng-click='openModalCobertura($event);'> Agregar Cobertura</button>
            <span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
          </header>
          <div class="widget-body clearfix">

              <table class="table">
                  <thead>
                    <tr>
                      <td>ID</td>
                      <td>SAT</td>
                      <td>Region</td>
                      <td>Comuna</td>
                      <td>Visita</td>
                      <td>Respuesta</td>
                      <td>KM</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="co in  coberturas">
                      <td><% co.id %></td>
                      <td><% co.tipo_sat %></td>
                      <td><% co.region.nombre %></td>
                      <td><% co.comuna.nombre %></td>
                      <td><% co.valor_visita %></td>
                      <td><% co.respuesta %></td>
                      <td><% co.kilometro %></td>
                      <td>
                        <button class="btn btn-danger">eliminar</button>
                      </td>
                      <input type="hidden" name="co[tipo_sat][]" value="<% co.tipo_sat %>">
                      <input type="hidden" name="co[region][]" value="<% co.region.id %>">
                      <input type="hidden" name="co[comuna_id][]" value="<% co.comuna.id %>">
                      <input type="hidden" name="co[valor_visita][]" value="<% co.valor_visita %>">
                      <input type="hidden" name="co[respuesta][]" value="<% co.respuesta %>">
                      <input type="hidden" name="co[kilometro][]" value="<% co.kilometro %>">
                    </tr>
                  </tbody>
              </table>

          </div>
        </div>
    </div>
</div>



  <div class="form-group text-right">
    <a href="{{url('/bosh/talleres')}}"> Regresar al listado de Talleres </a>
    <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>




{!! Form::close() !!}


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cobertura</h4>
      </div>
      <div class="modal-body">
        
        <form action="" method="post">
          
          <div class="form-group">
              <label for="region_id2">Region</label>
                  <select  id="region_id2" type="text"  class="form-control" ng-model="cobertura.region" ng-change="loadComuna2(cobertura.region)">          
                      <option ng-repeat="r in regiones" value="<% r %>"><% r.codigo %> <% r.nombre %></option>
                  </select>  
           </div>

          <div class="form-group">
              <label for="comuna_id2">Comuna</label>
              <select   type="text" class="form-control" id="comuna_id2" ng-model="cobertura.comuna">
                 <option ng-repeat="c in comunasSelector2" value="<% c %>"><% c.nombre %></option>
              </select>
          </div>

          <div class="form-group">
              <label for="kilometro" class="col-md-4 control-label">Kilometro </label>
              <input type="text" id="kilometro" class="form-control" ng-model="cobertura.kilometro">
           </div> 
           
          <div class="form-group">
              <label for="valor_visita" class="col-md-4 control-label">Valor Visita </label>
              <input type="text" id="valor_visita" class="form-control" ng-model="cobertura.valor_visita">
           </div>             


          <div class="form-group">
              <label for="tipo_sat" class="col-md-4 control-label">Tipo Sat </label>
              <input type="text" id="tipo_sat" class="form-control" ng-model="cobertura.tipo_sat">
           </div>
            
          <div class="form-group">
              <label for="respuesta" class="col-md-4 control-label">Respuesta</label>
              <input type="text" id="respuesta" class="form-control" ng-model="cobertura.respuesta">
           </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" ng-click="saveCobertura()">Guardar</button>
      </div>
    </div>
  </div>
</div>







