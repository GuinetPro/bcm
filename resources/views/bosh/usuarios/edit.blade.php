 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Editar Usuario</h1>
    <!-- Formulario -->
    @include('bosh.usuarios._form',['user' => $user, 'url' => '/bosh/usuarios/'.$user->id, 'method' => 'PATCH'])
 	
  </div>
@endsection