 @extends("layouts.app");

@section("content")
  <div class="big-padding text-center blue-grey white-text">
    <h1>Clientes</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Email</td>
          <td>Fecha Creacion</td>     
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach  ($clientes as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nombre }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->created_at }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/clientes/'.$c->id.'/edit')}}">
                Editar
              </a>

           
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection
