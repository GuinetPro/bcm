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