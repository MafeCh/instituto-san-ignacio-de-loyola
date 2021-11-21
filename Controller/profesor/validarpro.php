<?php
include_once '../Model/conexion.php';

session_start();

if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
    $username = $_POST['usuario'];
    $password = $_POST['contraseña'];
   
    $db = new Database();
    $query = $db->connect()->prepare('SELECT nombreUsuario, contraseña FROM profesor WHERE nombreUsuario=:username AND contraseña=:pass');
    $query->bindParam(':username',$username);
    $query->bindParam(':pass',$password);
    $query->execute();
    if($query->rowCount()>0){
       
        header('location: ../view/dashboard.php');

    }else{

        header('localhost: ../view/login.php');
    }
    }
