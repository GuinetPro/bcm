 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Ficha Cliente </h1>

 	<div class="row">
	  
	  <div class="col-md-3">

	  	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Detalle cliente</h3>
		  </div>
		  <div class="panel-body">
			  	<div class="form-group">
		  		<p>{{ $cliente->nombre.' '.$cliente->apellidoPaterno.' '.$cliente->apellidoMaterno  }}</p>
		  	</div>

			<div class="form-group">
			    <p>{{ $cliente->rut }}</p>
			</div>

			<div class="form-group">
			    <p>{{ $cliente->email }}</p>
			</div>	  	
		  </div>
		</div>
	
		<div class="pull-right">
			<button class="btn btn-success">Agregar Producto</button>
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

	  </div>

	  <div class="col-md-9">

	  	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Datos ultimas atenciónes</h3>
		    	  			
		  </div>
		  <div class="panel-body"><div class="pull-right">
			<button class="btn btn-success">Generar Atencion</button>
		</div>
		<br>
		<br>
			  	<table class="table table-striped">
					<thead>								
						<tr>
							<th>Atencion</th>
							<th>Promesa	Trabajo a Realizar</th>
							<th>Servicio Tecnico</th>
							<th>Trabajo realizado</th>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Pago</th>
							<th>Saldo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								
							</td>
						</tr>
					</tbody>
			  	</table>	  	
		  </div>
		</div>
	  </div>

	  	



	
	</div>
  </div>
@endsection