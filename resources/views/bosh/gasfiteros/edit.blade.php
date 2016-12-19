 @extends("layouts.app");

 @section("content")
  <div class="container white" >
    <h1>Editar Gasfiter</h1>
    <!-- Formulario -->
    @include('bosh.gasfiteros._form',['gasfiter' => $gasfiter, 'url' => '/bosh/gasfiteros', 'method' => 'PATCH'])
  </div>
@endsection