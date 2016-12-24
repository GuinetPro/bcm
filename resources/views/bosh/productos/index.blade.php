@extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Productos</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-info' href="{{url('/bosh/productos/create')}}">Agregar Producto</a>
          <a class='btn btn-success' href="{{url('/bosh/export/productos')}}">Exportar a Excel</a>
      </div>

    </div>

    <hr class="widget-separator">
    <div class="widget-body">
      <div class="table-responsive">
        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
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
            <td>{{ $p->categoria->nombre }}</td>
            <td>{{ $p->modelo->nombre }}</td>
            <td>{{ $p->marca->nombre }}</td>
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
        </div>
    </div>


@endsection
