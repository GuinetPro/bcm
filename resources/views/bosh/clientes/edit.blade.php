 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Editar Cliente {{$cliente->id}}</h1>
    <!-- Formulario -->
    <input type="hidden" id="cliente_id" value="{{$cliente->id}}">	
    @include('bosh.clientes._form',['cliente' => $cliente, 'url' => '/bosh/clientes/'.$cliente->id, 'method' => 'PATCH'])
 	
  </div>
@endsection