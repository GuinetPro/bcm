<div class="pull-right">
	<button class="btn btn-success" data-toggle="modal" data-target="#productoModal">Relacionar Producto</button>
</div>
<br>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-primary" ng-repeat="pro in ProductosCliente">
		<div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<% $index%>" aria-expanded="<%pro.collapse%>" aria-controls="collapseOne">
		          Producto #<% $index +1%>
		        </a>
		    </h4>
		</div>
		<div  id="collapseOne<% $index%>" ng-class="{'in': pro.collapse == true}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        
		        <div class="media" >
				  <div class="media-left">
				    <a href="#">
				      <img style="width: 64px; height: 64px;" class="media-object" src="{{ url('imagenes')  }}/<% pro.producto.imagen%>" alt="...">
				    </a>
				  </div>
				  <div class="media-body">
				    <table class="table table-striped table-productos">
				    	<tr>
				    		<td class="table-productos-title">Modelo</td>
				    		
				    	</tr>
				    	<tr>
				    		<td><% pro.producto.nombre%></td>
				    	</tr>
				    	<tr>
				    		<td class="table-productos-title">Fecha de Compra</td>
				    		
				    	</tr>
				    	<tr>
				    		<td><% pro.producto.fecha_compra%></td>
				    	</tr>
				    	<tr>
				    		<td class="table-productos-title">Lugar de Compra</td>
				    		
				    	</tr>
				    	<tr>
				    		<td><% pro.producto.lugar_compra%></td>
				    	</tr>
				    	<tr>
				    		<td class="table-productos-title">Garantia</td>
				    		
				    	</tr>
				    	<tr>
				    		<td></td>
				    	</tr>
				    	<tr>
				    		<td class="table-productos-title">Presupuesto</td>
				    		
				    	</tr>
				    	<tr>
				    		<td><% pro.producto.precio%></td>
				    	</tr>

				    	<tr>
				    		<td class="table-productos-title">Atencion Pendiente?</td>
				    		
				    	</tr>	
				    	<tr>
				    		<td></td>
				    	</tr>			    	
				    </table>
				  </div>
				</div>


		      </div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Relacionar Producto</h4>
      </div>
      <div class="modal-body">
        <form name="crearProductocliente" method="post">
              
              <input type="hidden" name="cliente" value="{{ $cliente->id}}">
        	  <div class="form-group">
			    <label for="nombre">Categoria</label>
			  	{!! Form::select('categoria_id', $categoriaList, "", ['class' => 'form-control','ng-model'=>'categoria','ng-change'=>'loadModelos(categoria)']) !!}
			  </div>

			  <div class="form-group">
			    <label for="nombre">Marca</label>
			  	{!! Form::select('marca_id', $marcaList, "", ['class' => 'form-control','ng-model'=>'marca']) !!}
			  </div>

			  <div class="form-group">
			    <label for="nombre">Modelo</label>
			    <select class="form-control" name="modelo" ng-model="modelo" ng-change="loadProductos()">
			    	<option ng-repeat="m in modelos" value="<% m.id %>"><% m.nombre %></option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="nombre">Producto</label>
			    <select class="form-control" ng-model="producto" name="producto">
			    	<option ng-repeat="p in productos" value="<% p.id %>"><% p.nombre %></option>
			    </select>			  
			  </div>


			 <div class="form-group">
			    <label for="nombre">Direccion</label>
			    <select class="form-control" ng-model="direccion" name="direccion">
			    	<option>Escoge una Direccion</option>
			     @foreach  ($cliente->direcciones()->get() as $d)
				 	<option  value="{{ $d->id }}">{{ $d->calle }}</option>
				 @endforeach

			    	
			    </select>			  
			  </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" ng-click="saveProducto();">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->