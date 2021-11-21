<?php

include_once '../../Model/conexion.php';

$n=$_POST['nombre'];
$a=$_POST['apellido'];
$t=$_POST['tipodocumento'];
$d=$_POST['documento'];
$e=$_POST['estado'];

$sql = "INSERT INTO estudiante (idEstudiante, nombreEstudiante, apellidoEstudiante, tipodocEstudiante, docEstudiante, estadoEstudiante)
                 VALUES ('$id','$n','$a','$t','$d', '$e')";

$db = new Database();
$conexion = $db->connect();
$query = $conexion->prepare($sql);
$query->execute();

if($query){
    header ('location: ../../View/gestionp.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
?>