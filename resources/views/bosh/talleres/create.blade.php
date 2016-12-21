 @extends("layouts.app");

 @section("content")
  <div class="container " ng-controller="TallerCtrl">
    <h1>Nuevo Taller</h1>
    <!-- Formulario -->
    @include('bosh.talleres._form',['taller' => $taller, 'url' => '/bosh/talleres', 'method' => 'POST'])
  </div>
@endsection