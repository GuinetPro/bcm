@extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Manejo de Usuarios</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-info' href="{{url('/bosh/usuarios/create')}}">Agregar Usuario</a>
          <a class='btn btn-success' href="{{url('/export/usuarios')}}">Exportar a Excel</a>
      </div>

    </div>

    <hr class="widget-separator">
    <div class="widget-body">
      <div class="table-responsive">
        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
      <thead>
        <tr>
          <td>ID</td>
          <td>Username</td>
          <td>Email</td>
          <td>Telefono</td>
          <td>Perfil</td>
          <td>Fecha Creacion</td> 
          <td></td>     
        </tr>
      </thead>
      <tbody>
        @foreach  ($usuarios as $u)
          <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->telefono }}</td>
            <td>{{ $u->rol->nombre }}</td>
            <td>{{ $u->created_at }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/bosh/usuarios/'.$u->id.'/edit')}}">
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
