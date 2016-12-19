<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Datos ultimas atenciónes</h3>		    	  			
	</div>

	<div class="panel-body">
		<div class="pull-right">
			<a class="btn btn-success" href="{{ url('/visitas/create')}}?cliente_id={{$cliente->id}}">Generar Atencion</a>
		</div>
		<br>
		<br>
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
							<th>Taller</th>
							<th>Estado</th>
							<th>Pago</th>
							<th>Saldo</th>
							<th></th>
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
								{{ $v->tipoPorRealizar->trabajo}}
							</td>
							<td>
								{{ $v->servicio_realizado->nombre}}
							</td>
							<td>
								{{ $v->taller->nombre}}
							</td>
							<td>
								{{ $v->estado->nombre}}
							</td>

							<td>
								
								{{ $v->abono}}
							</td>
							<td>
								{{ $v->total}}
							</td>
							<td>
								<a href="{{url('visitas/'.$v->id.'/edit')}}" class ="btn btn-info">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</a>
							</td>
						</tr>

				     @endforeach
					</tbody>
			  	</table>	  	
		  </div>
		</div>
	</div>	
</div>