 @extends("layouts.app");

 @section("content")
  <div class="container" ng-controller="ClienteCtrl">
    <h1>Crear Atencion</h1>
    <!-- Formulario -->


    @include('bosh.visitas._form',['visita' => $visita, 'url' => '/visitas', 'method' => 'POST'])
	

  </div>
@endsection