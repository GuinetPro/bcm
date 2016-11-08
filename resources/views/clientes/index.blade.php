 @extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Clientes</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-success pull-right' href="{{url('/clientes/create')}}">Agregar cliente</a>
      </div>

    </div>

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
               <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>

           
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  


@endsection
