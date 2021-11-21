<?php

include_once '../../Model/conexion.php';
$fe=$_POST['fecha'];
$fa=$_POST['falta'];
$ds=$_POST['descripcion'];
$pr=$_POST['idprofesor'];
$es=$_POST['idestudiante'];


$sql = "CALL insert_obs('$fe','$fa','$ds','$pr', '$es')";

$db = new Database();
$conexion = $db->connect();
$query = $conexion->prepare($sql);
$query->execute();

if($query){
    header ('location: ../../View/admin/observador.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
?>