<div class="modal fade" id="modalTelefono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button ng-click="reset()"  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Telefono</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="numero">Numero Telefonico</label>
             <input id="numero" class="form-control" placeholder="Numero" ng-model="data2.numero" type="text">
          </div>
          <div class="form-group">
            <label for="desc">Comentario</label>
            <textarea  id="desc"  class="form-control" ng-model="data2.desc"></textarea>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" ng-click="saveTelefono()">Guardar</button>
      </div>
    </div>
  </div>
</div>