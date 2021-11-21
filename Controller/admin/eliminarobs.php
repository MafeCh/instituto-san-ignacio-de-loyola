<?php 
require_once '../../Model/conexion.php';
    $ido=$_POST['idoD'];
    
   $db = new Database();
   $conexion = $db->connect();
   $query = $conexion->prepare("CALL delete_obs('$ido')");
   $query->execute();


if($query){
    header ('location: ../../View/admin/observador.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
 ?>