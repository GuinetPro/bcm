@extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Productos</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-success pull-right' href="{{url('/productos/create')}}">Agregar Producto</a>
      </div>

    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Categoria</td>
          <td>Modelo</td>
          <td>Marca</td>
          <td>Fecha Creacion</td>     
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach  ($productos as $p)
          <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->categoria_id }}</td>
            <td>{{ $p->modelo_id }}</td>
            <td>{{ $p->marca_id }}</td>
            <td>{{ $p->created_at }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/productos/'.$p->id.'/edit')}}">
               <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>

           
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  


@endsection
