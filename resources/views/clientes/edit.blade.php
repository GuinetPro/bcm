 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Editar Cliente {{$cliente->id}}</h1>
    <!-- Formulario -->
    <input type="hidden" id="cliente_id" value="{{$cliente->id}}">	
    @include('clientes._form',['cliente' => $cliente, 'url' => '/clientes/'.$cliente->id, 'method' => 'PATCH'])
 	
  </div>
@endsection