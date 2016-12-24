 @extends("layouts.app");

 @section("content")
 
    <h4>Ficha Cliente: {{ $cliente->nombre.' '.$cliente->apellidoPaterno.' '.$cliente->apellidoMaterno  }}</h4>
    <input type="hidden" id="cliente_id" value="{{$cliente->id}}">	

 	<div class="row"  ng-controller="ClienteShowCtrl">
	  
	  <div class="col-md-12">
	  	
				<div class="widget">
					<div class="m-b-lg nav-tabs-horizontal">
						<!-- tabs list -->
						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="active"><a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Datos ultimas atenciónes</a></li>

							<li role="presentation" ><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Detalle Cliente</a></li>
							<li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Productos</a></li>
							<li role="presentation"><a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">Direcciones</a></li>
							<!--<li role="presentation"><a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">Telefonos</a></li>-->
						</ul><!-- .nav-tabs -->

						<!-- Tab panes -->
						<div class="tab-content p-md">
							<div role="tabpanel" class="tab-pane  fade" id="tab-1">
								@include('bosh.clientes._detail',[ "cliente" => $cliente])
							</div><!-- .tab-pane  -->

							<div role="tabpanel" class="tab-pane fade" id="tab-2">							
								@include('bosh.productos._listCliente',[ "categoriaList" => $categoriaList, "marcaList" => $marcaList, "cliente" => $cliente])
							</div><!-- .tab-pane  -->

							<div role="tabpanel" class="tab-pane in active fade" id="tab-3">
								@include('bosh.visitas._listCliente',["visitas" => $visitas])	
							</div><!-- .tab-pane  -->

							<div role="tabpanel" class="tab-pane in  fade" id="tab-4">
								@include('partials.direccion._listCliente',["cliente" => $cliente])
							</div><!-- .tab-pane  -->
<!--
							<div role="tabpanel" class="tab-pane in  fade" id="tab-5">
								@include('partials.telefono._listCliente',["cliente" => $cliente])	
							</div> .tab-pane  -->
						</div><!-- .tab-content  -->
					</div><!-- .nav-tabs-horizontal -->
				</div><!-- .widget -->
		

	  </div>


	  	
	</div>
  
@endsection