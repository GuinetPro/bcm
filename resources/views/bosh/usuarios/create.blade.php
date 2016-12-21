 @extends("layouts.app");

 @section("content")
  <div class="container" ng-controller="UserCtrl">
    <h1>Nuevo Usuario</h1>
    <!-- Formulario -->
    @include('bosh.usuarios._form',['user' => $user, 'url' => '/bosh/usuarios', 'method' => 'POST'])
  </div>
@endsection