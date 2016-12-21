 @extends("layouts.app");

 @section("content")
  <div class="container" ng-controller="UserCtrl">
    <h1>Editar Usuario</h1>
    <!-- Formulario -->
    @include('bosh.usuarios._form',['user' => $user, 'url' => '/bosh/usuarios/'.$user->id, 'method' => 'PATCH'])
 	
  </div>
@endsection