<?php
include_once '../../Model/conexion.php';

$id=$_POST['idtU'];
$n=$_POST['nombretU'];
$a=$_POST['apellidotU'];

$db = new Database();
$conexion = $db->connect();

$sql="UPDATE estudiante SET nombreEstudiante=:n, apellidoEstudiante=:a WHERE idEstudiante=:id";

$query = $conexion->prepare($sql);
$query->execute(['id' => $id, 'n' => $n, 'a' => $a]);


if($query){
    header ('location: ../../View/gestionestu.php');
}else{
    echo '<script>alert("Error de registro");</script>';
}
?>