 @extends("layouts.app");

 @section("content")
    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Atenciones</h1> 
      </div>

      <div class="col-xs-6 col-md-4"> 
          <a class='btn btn-success pull-right' href="{{url('/export/visitas')}}">Exportar a Excel</a>
      </div>
    </div>

    <hr class="widget-separator">
    <div class="widget-body">
      <div class="table-responsive">
        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
					<thead>								
						<tr>
							<th>Cliente</th>
							<th>Atencion</th>
							<th>Promesa	Trabajo a Realizar</th>
							<th>Servicio Tecnico</th>
							<th>Trabajo realizado</th>
							<th>Estado</th>
							<th>Pago</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						 @foreach  ($visitas as $v)
							<tr>
								<td>
									{{ $v->cliente->nombre}} {{ $v->cliente->apellidoPaterno}}
								</td>

								<td>
									{{ $v->tipoPago->nombre}}
								</td>
								<td>
									{{ $v->tipoPorRealizar->trabajo}}
								</td>
								<td>
									{{ $v->servicio_realizado->nombre}}
								</td>
								<td>
									
								</td>
								<td>
									{{ $v->estado->nombre}}
								</td>
								<td>
									{{ $v->abono}}
								</td>
								<td>
									<a href="{{url('tecnico/visitas/'.$v->id.'/edit')}}" class ="btn btn-info">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>								
								</td>
							</tr>
						@endforeach
					</tbody>
			  	</table>
  
      </div>
    </div>

@endsection