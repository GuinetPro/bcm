 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Crear Atencion</h1>
    <!-- Formulario -->
 	<div class="row">
	  
	  <div class="col-md-3">
	  	@include('clientes._detail',[ "cliente" => $cliente])	

	  	@include('visitas._form',['visita' => $visita, 'url' => '/visitas', 'method' => 'POST'])
	  </div>
	</div>

  </div>
@endsection