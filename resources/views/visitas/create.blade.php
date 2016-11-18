 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Crear Atencion</h1>
    <!-- Formulario -->
 	<div class="row">
	  
	  <div class="col-md-3">
	  	@include('clientes._detail',[ "cliente" => $cliente])	


		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Escoge Direccion</h3>
		  </div>
		  <div class="panel-body">
			<div class="form-group">
		  		<select class="form-control">
		  			<option></option>
		  			@foreach  ($cliente->direcciones as $d)
				  		<option value="{{$d->id}}">{{$d->calle}} ({{$d->comuna->nombre}})</option>
				  	@endforeach	  			
		  		</select>
		  	</div>
		  </div>
		</div>

		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Escoge un Producto</h3>
		  </div>
		  <div class="panel-body">
			<div class="form-group">
		  		<select class="form-control">
		  			<option></option>
		  			@foreach  ($cliente->productos as $p)
				  		<option value="{{$p->id}}">{{$p->nombre}}</option>
				  	@endforeach	  			
		  		</select>
		  	</div>
		  </div>
		</div>

	  </div>

	  <div class="col-md-9">
	  	@include('visitas._form',['visita' => $visita, 'url' => '/visitas', 'method' => 'POST'])
	  </div>
	</div>

  </div>
@endsection