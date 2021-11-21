<?php

include_once '../../Model/conexion.php';
$n=$_POST['nombreU'];
$a=$_POST['apellidoU'];
$t=$_POST['tipodocumentoU'];
$d=$_POST['documentoU'];

$sql="CALL update_usuario('$n','$a','$t','$d')";
$db = new Database();
$conexion = $db->connect();
$query = $conexion->prepare($sql);
$query->execute();


if($query){
    header ('location: ../../View/admin/gestionp.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
?>