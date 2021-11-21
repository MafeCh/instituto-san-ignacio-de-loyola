<?php

include_once '../../Model/conexion.php';
$f=$_POST['fechaU'];
$fa=$_POST['faltaU'];
$de=$_POST['descripcionU'];
$ie=$_POST['idprofesorU'];


$db = new Database();
$conexion = $db->connect();
$query = $conexion->prepare("CALL update_obs('$f','$fa','$de','$ie')");
$query->execute();


if($query){
    header ('location: ../../View/admin/observador.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
?>