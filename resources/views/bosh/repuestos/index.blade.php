@extends("layouts.app");

@section("content")

    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Repuestos</h1> 
      </div>
      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-info' href="{{url('/bosh/repuestos/create')}}">Agregar Repuesto</a>
          <a class='btn btn-success' href="{{url('/export/repuestos')}}">Exportar a Excel</a>
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
          <td>Precio</td>
          <td>Codigo</td>
          <td>Stock</td>
          <td>Fecha Creacion</td>   
          <td></td>  
        </tr>
      </thead>
      <tbody>
        @foreach  ($repuestos as $r)
          <tr>
            <td>{{ $r->id }}</td>
            <td>{{ $r->nombre }}</td>
            <td>{{ $r->precio }}</td>
            <td>{{ $r->codigo }}</td>
            <td>{{ $r->stock }}</td>
            <td>{{ $r->created_at }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/bosh/repuestos/'.$r->id.'/edit')}}">
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
