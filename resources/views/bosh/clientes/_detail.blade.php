<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Detalle cliente</h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tr>
				<td>Nombre Completo	</td>
				<td>
					{{ $cliente->nombre.' '.$cliente->apellidoPaterno.' '.$cliente->apellidoMaterno  }}
				</td>
			</tr>

			<tr>
				<td>Rut/DV</td>
				<td>
					{{ $cliente->rut }}
				</td>
			</tr>

			<tr>
				<td>Email</td>
				<td>
					{{ $cliente->email }}
				</td>
			</tr>

		</table>
  	
	</div>
</div>