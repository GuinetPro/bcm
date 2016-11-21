 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteShowCtrl">
    <h1>Ficha Cliente </h1>
    <input type="hidden" id="cliente_id" value="{{$cliente->id}}">	

 	<div class="row">
	  
	  <div class="col-md-3">

	  	@include('clientes._detail',[ "cliente" => $cliente])	
	
		@include('productos._listCliente',[ "categoriaList" => $categoriaList, "marcaList" => $marcaList, "cliente" => $cliente])	
	  </div>

	  <div class="col-md-9">
	  	 @include('visitas._listCliente',["visitas" => $visitas])	
	  </div>

	  	
	</div>
  </div>
@endsection