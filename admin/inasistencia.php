<?php 
require_once("header_admin.php");
include_once '../../Model/conexion.php';

$db = new Database();
?>
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Gestión Inasistencias 
          <button class="btn btn-primary" data-toggle="modal" data-target="#registro">Registrar Inasistencia </button>
        </h1>
        </div>
    </div>

    <div class="tile">
            <h3 class="tile-title">Inasistencias</h3>
            <div class="tile">
            <h3 class="tile-title">Generar reporte por estudiante</h3>
            <div class="tile-body">
            
              <form class="row" method="POST" action="../../reportes/inasistencia/inasistencia.php">
              <div class="form-group col-md-3">
                  <label class="control-label">Seleccione el Id</label>
                  <select class="form-control" id="exampleSelect1" name="inasistencia">
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
                    <option>15</option>
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
                  <th>Fecha de la Inasistencia</th>
                  <th>Excusa</th>
                  <th>Id de Estudiante</th>
                  <th>Id de Profesor</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conexion = $db->connect();
                $query = $conexion->prepare('SELECT * FROM `inasistencia`');
                $query->execute();

                while($row=$query->fetch(PDO::FETCH_NUM)){
                ?>
                <tr>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[4];?></td>
                  <td><button class="btn btn-warning" data-toggle="modal" data-target="#actualizar"><span class="fa fa-pencil-square-o"></span></button></td>
                  <td><button class="btn btn-danger" data-toggle="modal" data-target="#eliminar"><span class="fa fa-trash"></span></button></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
        </div>
</main>
<?php require_once("footer_admin.php");
?>