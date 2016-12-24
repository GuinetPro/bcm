 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Nuevo Producto</h1>
    <!-- Formulario -->
    @include('bosh.productos._form',['producto' => $producto, 'url' => '/bosh/productos', 'method' => 'POST'])
  </div>
@endsection