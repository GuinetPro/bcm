<div class="pull-right">
	<button class="btn btn-success" data-toggle="modal" data-target="#productoModal">Relacionar Producto</button>
</div>
<br>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Producto #1
		        </a>
		    </h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        
		        <div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="..." alt="...">
				    </a>
				  </div>
				  <div class="media-body">
				    <table class="table table-striped">
				    	<tr>
				    		<td>Modelo</td>
				    		<td>vc</td>
				    	</tr>
				    	<tr>
				    		<td>Fecha de Compra</td>
				    		<td></td>
				    	</tr>
				    	<tr>
				    		<td>Lugar de Compra</td>
				    		<td></td>
				    	</tr>
				    	<tr>
				    		<td>Garantia</td>
				    		<td></td>
				    	</tr>
				    	<tr>
				    		<td>Presupuesto</td>
				    		<td></td>
				    	</tr>
				    	<tr>
				    		<td>Atencion Pendiente?</td>
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
               {{ csrf_field() }}
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