 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Nuevo Cliente</h1>
    <!-- Formulario -->
    @include('clientes._form',['cliente' => $cliente, 'url' => '/clientes', 'method' => 'POST'])
  </div>
@endsection