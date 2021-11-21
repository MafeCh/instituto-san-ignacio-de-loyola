<?php 
require_once("header_admin.php");
include_once '../../Model/conexion.php';

$db = new Database();
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Gestión Observador    
          <button class="btn btn-primary" data-toggle="modal" data-target="#registro">Registrar Observación </button>
        </h1>
        </div>
      </div>
      <div class="tile">
            <h3 class="tile-title">Observaciones</h3>
            <div class="tile">
            <h3 class="tile-title">Generar reporte por estudiante</h3>
            <div class="tile-body">
            
              <form class="row" method="POST" action="../../reportes/reporte.php">
              <div class="form-group col-md-3">
                  <label class="control-label">Seleccione el Id</label>
                  <select class="form-control" id="exampleSelect1" name="reporte">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                  </select>
                </div>
                <div class="form-group col-md-4 align-self-end">
                <button type="submit" class="btn btn-success" target="_blank" >Generar</button>
                </div>
              </form>
            </div>
          </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Fecha</th>
                  <th>Tipo de Falta</th>
                  <th>Descripción</th>
                  <th>Descargos</th>
                  <th>Id de Estudiante</th>
                  <th>Id de Profesor</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conexion = $db->connect();
                $query = $conexion->prepare('SELECT * FROM `observacion`');
                $query->execute();

                while($row=$query->fetch(PDO::FETCH_NUM)){
                ?>
                <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[4];?></td>
                  <td><?php echo $row[5];?></td>
                  <td><?php echo $row[6];?></td>
                  <td><button class="btn btn-warning" data-toggle="modal" data-target="#actualizar"><span class="fa fa-pencil-square-o"></span></button></td>
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#eliminar"><span class="fa fa-trash"></span></button></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
    </main>
  
    <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                      <form class="modal-sm" method="post" action="../../Controller/admin/agregarobs.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
                          </div>
                          <div class="modal-body">
                              <label>Fecha</label>
                              <input required type="date" name="fecha" class="form-control input-sm">
                              <label>Tipo de Falta</label>
                              <select class="form-control" id="exampleSelect1" name="falta">
                             	<option>Leve</option>
                      		    <option>Grave</option>
                              <option>Gravísima</option>
                              <option>No presenta</option>
                    	        </select>
                              <label>Descripcion</label>
                              <input required type="textarea" name="descripcion" class="form-control input-sm">
                              <label>Id de Profesor</label>
                              <input required type="text" name="idprofesor" class="form-control input-sm">
                              <label>Id de Estudiante</label>
                              <input required type="text" name="idestudiante" class="form-control input-sm">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Registrar</button>
                          </div>
                      </form>
                  </div>
            </div>
        </div>

        <div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                      <form class="modal-sm" method="post" action="../../Controller/admin/actualizarobs.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Actualizar observación</h4>
                          </div>
                          <div class="modal-body">
                              <label>Fecha</label>
                              <input required type="date" name="fechaU" class="form-control input-sm">
                              <label>Tipo de Falta</label>
                              <select class="form-control" id="exampleSelect1" name="faltaU">
                             	<option>Leve</option>
                      		    <option>Grave</option>
                      		    <option>Gravísima</option>
                    	        </select>
                              <label>Descripción</label>
                              <input required type="text" name="descripcionU" class="form-control input-sm">
                              <label>Id de Profesor</label>
                              <input required type="text" name="idprofesorU" class="form-control input-sm">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-warning">Actualizar</button>
                          </div>
                      </form>
                  </div>
            </div>
        </div>

        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                      <form class="modal-sm" method="post" action="../../Controller/admin/eliminarobs.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Eliminar observación</h4>
                          </div>
                          <div class="modal-body">
                              <label>Digite la id</label>
                              <input required type="number" name="idoD" class="form-control input-sm">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </div>
                      </form>
                  </div>
            </div>
        </div>
<?php require_once("footer_admin.php");
?>