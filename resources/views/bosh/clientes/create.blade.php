 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Nuevo Cliente</h1>
    <!-- Formulario -->
    @include('bosh.clientes._form',['cliente' => $cliente, 'url' => '/bosh/clientes', 'method' => 'POST'])
  </div>
@endsection