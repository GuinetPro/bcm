
          <div class="form-group" ng-class="{ 'has-error' : data2.error }">
            <label for="numeroTelefono">Numero Telefonico</label>
             <input  id="numeroTelefono" class="form-control phone" ng-model="data2.numero" type="tel" placeholder="9 6123 4567">
             <p ng-show="data2.error" class="help-block">El Campo Telefono es Obligatoria.</p>
          </div>
          <div class="form-group">
            <label for="desc">Comentario</label>
            <textarea  class="form-control" ng-model="data2.desc" id="numerodesc"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" ng-click="cerrarFormTelefono()">Cerrar</button>
            <button type="button" class="btn btn-primary" ng-click="guardarFormTelefono()" ng-hide="editTelefono">Guardar</button>
            <button type="button" class="btn btn-primary" ng-click="guardarFormEdit()" ng-show="editTelefono">Editar</button>
          </div>
        

