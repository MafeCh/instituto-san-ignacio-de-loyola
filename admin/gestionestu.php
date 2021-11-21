<?php 
require_once("header_admin.php");
include_once '../../Model/conexion.php';

$db = new Database();
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Gestión Estudiantes     
          <button class="btn btn-primary" data-toggle="modal" data-target="#registro"> Registrar</button>
        </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
      </div>
      <div class="tile">
            <h3 class="tile-title">Estudiantes</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>T. de Documento</th>
                  <th>Documento</th>
                  <th>Estado</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conexion = $db->connect();
                $query = $conexion->prepare('SELECT * FROM `estudiante`');
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
                      <form class="modal-sm" method="post" action="../controller/estudiante/agregarestu.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
                          </div>
                          <div class="modal-body">
                          <label>Nombre</label>
                              <input type="text" name="nombre" class="form-control input-sm">
                              <label>Apellido</label>
                              <input type="text" name="apellido" class="form-control input">
                              <label>Tipo de Documento</label>
                              <input type="text" name="tipodocumento" class="form-control input-sm">
                              <label>Documento</label>
                              <input type="text" name="documento" class="form-control input-sm">
                              <label>Estado</label>
                              <input type="text" name="estado" class="form-control input-sm">
                              <label>Nombre de Usuario</label>
                              <input type="text" name="nombreusuario" class="form-control input">
                              <label>Contraseña</label>
                              <input type="text" name="contraseña" class="form-control input">
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
                      <form class="modal-sm" method="post" action="../Controller/estudiante/actualizarestu.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Actualizar usuario</h4>
                          </div>
                          <div class="modal-body">
                              <label>Nombre</label>
                              <input type="text" name="nombreU" class="form-control input-sm">
                              <label>Apellido</label>
                              <input type="text" name="apellidoU" class="form-control input">
                              <label>Tipo de Documento</label>
                              <input type="text" name="tipodocumentoU" class="form-control input-sm">
                              <label>Documento</label>
                              <input type="text" name="documentoU" class="form-control input-sm">
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
                      <form class="modal-sm" method="post" action="../Controller/eliminar.php">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4>
                          </div>
                          <div class="modal-body">
                              <label>id</label>
                              <input type="text" name="idD" class="form-control input-sm">
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </div>
                      </form>
                  </div>
            </div>
        </div>
<?php require_once("footer_admin.php");?>