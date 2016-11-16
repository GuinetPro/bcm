 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Crear Atencion</h1>
    <!-- Formulario -->
    @include('clientes._form',['cliente' => $cliente, 'url' => '/visitas', 'method' => 'POST'])
  </div>
@endsection