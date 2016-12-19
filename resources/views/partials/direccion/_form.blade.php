  <div class="col-xs-6 col-md-4">
              

                  <div class="form-group" ng-class="{ 'has-error' : formDireccion.region.$invalid && submitted }">
                    <label for="region" >Region</label>
                    <select  type="text" id="region" name="region" class="form-control" ng-model="region" ng-change="loadComuna(region)">          
                       <option ng-repeat="r in regiones" value="<% r %>"><% r.codigo %> <% r.nombre %></option>
                    </select>
                    <p ng-show="formDireccion.region.$invalid &&  submitted" class="help-block">La Region es Obligatoria.</p>
                  </div>

                  <div class="form-group"  ng-class="{ 'has-error' : formDireccion.comuna.$invalid   && submitted}">
                    <label for="comuna">Comuna</label>
                    <select  id="comuna" type="text" class="form-control" name="comuna" ng-model="comuna">
                       <option ng-repeat="c in comunasSelector" value="<% c %>"><% c.nombre %></option>
                    </select>
                    <p ng-show="formDireccion.region.$invalid &&  submitted" class="help-block">La Comuna es Obligatoria.</p>
                  </div>

                  <div class="form-group"  ng-class="{ 'has-error' : formDireccion.calle.$invalid && formDireccion.numero.$invalid &&  submitted}">
                    <label for="interior">Detalle</label>

                    <select  name="interior" class="form-control" ng-model="interior">
                                <option value=""></option>
                                <option value="CALLE">CALLE</option>
                                <option value="AVENIDA">AVENIDA</option>
                                <option value="PASAJE">PASAJE</option>
                                <option value="KM">KM</option>
                                <option value="PARCELA">PARCELA</option>
                                <option value="CAMINO">CAMINO</option>
                    </select>
                    <label for="calle">Direccion </label>
                    <input  type="text" class="form-control" placeholder ="Calle" name="calle" ng-model="calle">
                    <table class="table">
                      <tr>
                        <td>
                            <input  type="number" class="form-control" placeholder ="Numero" name="numero" ng-model="numero">
                        </td>
                        <td>
                            <input type="number" class="form-control" placeholder ="Departamento" ng-model="dpt">
                        </td>
                      </tr>
                    </table>
                    <p ng-show="formDireccion.calle.$invalid && formDireccion.numero.$invalid &&  submitted" class="help-block">Los campos Calle/Numero son Obligatorios.</p>        
                  </div>

                  <div class="form-group">
                    <label for="numero">Telefonico Fijo</label>
                     <input id="numero" class="form-control phone"  ng-model="fijo" type="tel" placeholder="9 6123 4567">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" ng-click="cerrarFormDireccion()">Cerrar</button>
                    <button type="button" class="btn btn-primary" ng-click="guardarDireccion()">Guardar</button>
                  </div>


            </div>
  <div class="col-xs-12 col-sm-6 col-md-8">
      <input id="pac-input" class="controls" type="text" placeholder="Search Box"> 
      <input id="latitude" type="hidden" /> 
      <input id="longitude" type="hidden"/>     
      <div id="map"></div>
  </div>