 @extends("layouts.app");

 @section("content")
  <div class="container white">
    <h1>Editar Producto</h1>
    <!-- Formulario -->
    @include('productos._form',['producto' => $producto, 'url' => '/productos/'.$producto->id, 'method' => 'PATCH'])
 	
  </div>
@endsection