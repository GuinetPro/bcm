 @extends("layouts.app");

 @section("content")
	
	<div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
		
		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-1">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
					<h4 class="panel-title">1.-Datos de la atencion</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
				<div class="panel-body">
					
					

				</div>
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-2">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
					<h4 class="panel-title">2.-Atenciones anteriores</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
				<div class="panel-body">
					
					<table class="table table-striped">

						<thead>
							<tr>
								<th>Atencion</th>
								<th>Taller</th>
								<th>Observacion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>					
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-3">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
					<h4 class="panel-title">3.-Datos del cliente</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
				<div class="panel-body">
					@include('clientes._detail',[ "cliente" => $cliente])	
				</div>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-4">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
					<h4 class="panel-title">4.-Datos del trabajo</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
				<div class="panel-body">

					<table class="table table-striped">

						<tr>
							<td>Tipo de Atencion :</td>
							<td></td>
						</tr>	

						<tr>
							<td>Solicitante :	</td>
							<td></td>
						</tr>

						<tr>
							<td>Taller/Distribuidor :	</td>
							<td></td>
						</tr>

						<tr>
							<td>Tipo de Presupuesto :	</td>
							<td></td>
						</tr>
						<tr>
							<td>Trabajo a Realizar :	</td>
							<td></td>
						</tr>

						<tr>
							<td>Nomina de Tiendas :	</td>
							<td></td>
						</tr>

						<tr>
							<td>Descripcion del problema :</td>
							<td></td>
						</tr>
					</table>

				</div>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-5">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
					<h4 class="panel-title">5.-Datos del producto</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-5">
				<div class="panel-body">

				<table class="table table-striped">
					<tr>
						<td>Marca</td>
						<td>uyuyuy</td>
					</tr>
					<tr>
						<td>Producto</td>
						<td></td>
					</tr>
					<tr>
						<td>Fecha de compra</td>
						<td></td>
					</tr>
					<tr>
						<td>Litraje</td>
						<td></td>
					</tr>
					<tr>
						<td>Tipo de Gas</td>
						<td></td>
					</tr>
					<tr>
						<td>Tiro</td>
						<td></td>
					</tr>

					<tr>
						<td>Modelo</td>
						<td></td>
					</tr>
					<tr>
						<td>Cdgo Model</td>
						<td></td>
					</tr>

				</table>

				    <div class="row">
				     	<div class="col-xs-12 col-sm-6 col-md-8">
				     			<label for="nombre">Codigo QR</label>
					    	  <video autoplay></video>
							  <button id="reset" class="btn btn-default">Reset</button>
							  <button id="stop"  class="btn btn-default">Stop</button>
					    </div>
				    </div>

				</div>
			</div>
		</div>	

		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-6">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
					<h4 class="panel-title">6.-Datos de finalizacion</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-6">
				<div class="panel-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
				</div>
			</div>
		</div>	

		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading-7">
				<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
					<h4 class="panel-title">7.-Repuestos asociados	</h4>
					<i class="fa acc-switch"></i>
				</a>
			</div>
			<div id="collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-7">
				<div class="panel-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
				</div>
			</div>
		</div>		
				
	</div><!-- panel-group -->





  <div class="form-group text-right">
    <a href="{{url('tecnico/visitas')}}"> Regresar al listado de Atenciones </a>
     <input type="submit" value="Guardar" class="btn btn-success btn-lg">
  </div>



    <script src="{{ url('/js/qcode-decoder.min.js') }}"></script>

  <script type="text/javascript">

  (function () {
    'use strict';

    var qr = new QCodeDecoder();

    if (!(qr.isCanvasSupported() && qr.hasGetUserMedia())) {
      alert('Your browser doesn\'t match the required specs.');
      throw new Error('Canvas and getUserMedia are required');
    }

    var video = document.querySelector('video');
    var reset = document.querySelector('#reset');
    var stop = document.querySelector('#stop');


    function resultHandler (err, result) {
      if (err)
        return console.log(err.message);

      alert(result);
    }

    // prepare a canvas element that will receive
    // the image to decode, sets the callback for
    // the result and then prepares the
    // videoElement to send its source to the
    // decoder.

    qr.decodeFromCamera(video, resultHandler);


    // attach some event handlers to reset and
    // stop whenever we want.

    reset.onclick = function () {
      qr.decodeFromCamera(video, resultHandler);
    };

    stop.onclick = function () {
      qr.stop();
    };

  })();
  </script>

 @endsection