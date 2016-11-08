<div class="modal fade" id="modalDireccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button ng-click="reset()"  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Direccion</h4>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1" >Region</label>
            <select type="text" class="form-control" ng-model="data.region" ng-change="loadComuna(data.region)">
               <option value="">Escoge una Region</option>
               <option ng-repeat="r in regiones" value="<% r %>"><% r.codigo %> <% r.nombre %></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Comuna</label>
            <select id="" type="text" class="form-control" ng-model="data.comuna">
              <option value="">Escoge una Comuna</option>
               <option ng-repeat="c in comunasSelector" value="<% c %>"><% c.nombre %></option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Detalle</label>
            <table class="table">
              <tr>
                <td>
                  
                   <select name="tvia" class="form-control" ng-model="data.interior">
                        <option value="-" selected="selected">-</option>
                        <option value="CALLE">CALLE</option>
                        <option value="AVENIDA">AVENIDA</option>
                        <option value="PASAJE">PASAJE</option>
                        <option value="KM">KM</option>
                        <option value="PARCELA">PARCELA</option>
                        <option value="CAMINO">CAMINO</option>
                        </select>
                </td>
                <td><input type="text" class="form-control" placeholder ="Calle" ng-model="data.calle"></td>
                <td><input type="text" class="form-control" placeholder ="Numero" ng-model="data.numero"></td>
                <td><input type="text" class="form-control" placeholder ="Departamento" ng-model="data.dpt"></td>
              </tr>
            </table>
                  
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Numero Telefonico</label>
             <input class="form-control" placeholder="Numero" ng-model="data.telefono" type="text">
          </div>
          
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" ng-click="saveDireccion()">Guardar</button>
      </div>
    </div>
  </div>
</div>
