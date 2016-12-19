 @extends("layouts.app");

 @section("content")
  <div class="container white" ng-controller="ClienteCtrl">
    <h1>Nuevo Gasfiter</h1>
    <!-- Formulario -->
    @include('bosh.gasfiteros._form',['gasfiter' => $gasfiter, 'url' => '/bosh/gasfiteros', 'method' => 'POST'])
  </div>
@endsection