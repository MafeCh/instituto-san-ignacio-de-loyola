<?php 
require_once '../../Model/conexion.php';
    $id=$_POST['idD'];
    
   $db = new Database();
   $conexion = $db->connect();
   $query = $conexion->prepare("CALL delete_usuario('$id')");
   $query->execute();


if($query){
    header ('location: ../../View/admin/gestionp.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
 ?>