<?php

include_once '../../Model/conexion.php';
$no=$_POST['nombre'];
$ap=$_POST['apellido'];
$ti=$_POST['tipodocumento'];
$do=$_POST['documento'];
$es=$_POST['estado'];
$ma=$_POST['materia'];
$nu=$_POST['nombreusuario'];
$co=$_POST['contraseña'];


$sql = "CALL insert_usuario('$no','$ap','$ti','$do', '$es','$ma','$nu','$co')";

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