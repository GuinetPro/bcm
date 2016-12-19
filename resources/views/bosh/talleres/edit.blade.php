 @extends("layouts.app");

 @section("content")
  <div class="container white"  ng-controller="TallerCtrl">
    <h1>Editar Taller</h1>
    <!-- Formulario -->
    <input type="hidden" id="taller_id" value="{{$taller->id}}">	
    @include('bosh.talleres._form',['taller' => $taller, 'url' => '/bosh/talleres/'.$taller->id, 'method' => 'PATCH'])
 	
  </div>
@endsection