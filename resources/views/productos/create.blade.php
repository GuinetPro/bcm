 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Nuevo Producto</h1>
    <!-- Formulario -->
    @include('productos._form',['producto' => $producto, 'url' => '/productos', 'method' => 'POST'])
  </div>
@endsection