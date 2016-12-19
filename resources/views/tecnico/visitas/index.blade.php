 @extends("layouts.app");

 @section("content")
  
    <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Atenciones Criticas</h1> 
      </div>
    </div>

    <hr class="widget-separator">
    <div class="widget-body">
      <div class="table-responsive">
        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
					<thead>								
						<tr>
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
						
					</tbody>
			  	</table>
  
      </div>
    </div>


        <div class="row">
     <div class="col-xs-12 col-sm-6 col-md-8">
        <h1>Atenciones Pendientes</h1> 
      </div>
    </div>

    <hr class="widget-separator">
    <div class="widget-body">
      <div class="table-responsive">
        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
					<thead>								
						<tr>
							<th>Atencion</th>
							<th>Promesa	Trabajo a Realizar</th>
							<th>Servicio Tecnico</th>
							<th>Trabajo realizado</th>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Pago</th>
							<th>Saldo</th>
						</tr>
					</thead>
					<tbody>
 						@foreach  ($visitas as $v)
							<tr>
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