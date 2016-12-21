@extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Talleres</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-info' href="{{url('/bosh/talleres/create')}}">Agregar Taller</a>
          <a class='btn btn-success' href="{{url('/export/taller')}}">Exportar a Excel</a>
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
          <td>Email</td>
          <td>Telefono</td>
          <td>Movil</td>
          <td>Direccion</td>   
          <td>Comuna</td>
          <td>Region</td>
          <td>Fecha Creacion</td> 
          <td></td>  
        </tr>
      </thead>
      <tbody>
        @foreach  ($talleres as $t)
          <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nombre }}</td>
            <td>{{ $t->email }}</td>
            <td>{{ $t->telefono }}</td>
            <td>{{ $t->movil }}</td>           
            <td>{{ $t->direccion }}</td>
            <td>{{ $t->comuna->nombre }}</td>
            <td>{{ $t->region->nombre }}</td>
            <td>{{ $t->created_at }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/bosh/talleres/'.$t->id.'/edit')}}">
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
