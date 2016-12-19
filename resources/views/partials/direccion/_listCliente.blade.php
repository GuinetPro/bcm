
<br>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php $cont = 1; ?>
@foreach  ($cliente->direcciones()->get() as $d)
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $cont }}" aria-expanded="<%pro.collapse%>" aria-controls="collapseOne">
		          Direccion #{{ $cont }}
		        </a>
		    </h4>
		</div>
		<div  id="collapseOne{{ $cont }}"  class="panel-collapse collapse true" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        
		        				 
				 <div class="form-group">
                    <label for="region" >Region</label>
                    <input class="form-control"  type="text" value="{{$d->comuna->region->nombre}}" readonly="true">
                  </div>

                  <div class="form-group" >
                    <label for="comuna">Comuna</label>
                    <input class="form-control"  type="text" value="{{$d->comuna->nombre}}" readonly="true">
                  </div>

                  <div class="form-group">
                    <label for="interior">Detalle</label>
					<input class="form-control" type="text" value="{{$d->calle}} {{$d->departamento}}" readonly="true">
				  		
				  </div>			
                  <div class="form-group">
                    <label for="interior">Telefono Fijo</label>
					<input class="form-control" type="text" value="{{$d->telefono}}" readonly="true">
				  		
				  </div>
				</div>			    
		</div>
	</div>
<?php $cont++; ?>
@endforeach


</div>
