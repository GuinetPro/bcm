 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Nuevo Repuesto</h1>
    <!-- Formulario -->
    @include('bosh.repuestos._form',['repuesto' => $repuesto, 'url' => '/bosh/repuestos', 'method' => 'POST'])
  </div>
@endsection