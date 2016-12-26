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
            <td>MARCA</td>
            <td>PRODUCTO</td>
            <td>LITRAJE</td>
            <td>GAS</td> 
            <td>EVACUACION GAS</td>  
            <td>MODELO</td> 
            <td>CODIGO</td>  
            <td>PLANTA</td>
            <td></td>
        </tr>
      </thead>
      <tbody>
        @foreach  ($productos as $p)
          <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->marca->nombre }}</td>
            <td>{{ $p->tipoproducto->nombre }}</td>
            <td>{{ $p->litraje->lts }}</td>
            <td>{{ $p->tipoGas->nombre }}</td>
            <td>{{ $p->tiro->nombre }}</td>
            <td>{{ $p->modelo }}</td>
            <td>{{ $p->codigo }}</td>
            <td>{{ $p->planta->nombre }}</td>
            <td> 
              <a class="btn btn-warning" href="{{url('/bosh/productos/'.$p->id.'/edit')}}">
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
