
<br>
<br>
<div class="panel-group" id="accordionTel" role="tablist" aria-multiselectable="true">
<?php $cont = 1; ?>
@foreach  ($cliente->telefonos()->get() as $d)
	<div class="panel panel-primary">
		<div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordionTel" href="#collapseOneTel{{ $cont }}" aria-expanded="<%pro.collapse%>" aria-controls="collapseOne">
		          Telefono #{{ $cont }}
		        </a>
		    </h4>
		</div>
		<div  id="collapseOneTel{{ $cont }}"  class="panel-collapse collapse true" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		         				 
		          <div class="form-group" ng-class="{ 'has-error' : data2.error }">
		            <label for="numeroTelefono">Numero Telefonico</label>
		             <input required id="numeroTelefono" class="form-control phone" readonly="true" value='{{ $d->numero}}'>
		          </div>
		          <div class="form-group">
		            <label for="desc">Comentario</label>
		            <textarea  class="form-control" ng-model="data2.desc" id="numerodesc" readonly="true">{{ $d->comentario }}</textarea>
		          </div>		    
				</div>
		</div>
	</div>
<?php $cont++; ?>
@endforeach


</div>
