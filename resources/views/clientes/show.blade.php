 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteShowCtrl">
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
	
		@include('productos._listCliente',[ "categoriaList" => $categoriaList, "marcaList" => $marcaList, "cliente" => $cliente])	
	  </div>

	  <div class="col-md-9">
	  	 @include('visitas._listCliente',[])	
	  </div>

	  	
	</div>
  </div>
@endsection