 @extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Clientes</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-info' href="{{url('/clientes/create')}}">Agregar cliente</a>
          <a class='btn btn-success' href="{{url('/export/clientes')}}">Exportar a Excel</a>
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
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                  </a>
                  <a class="btn btn-info" href="{{url('/clientes/'.$c->id)}}">
                   <i class="fa fa-tasks" aria-hidden="true"></i>  Ficha
                  </a>
               
                </td>

              </tr>
            @endforeach
          </tbody>
        </table>
  
      </div>
    </div>

@endsection
