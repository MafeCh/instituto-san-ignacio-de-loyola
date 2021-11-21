<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/ingresar.css">
</head>
<body>
    <form class="formulario" action="../Controller/estudiante/validar.php" method="POST">
    <h1>Login</h1> 
    <div class="contenedor">
        <div class="input-contenedor">
            <input required type="text" name="usuario" placeholder="Ingrese usuario">
        </div>

        <div class="input-contenedor">
            <input required type="password" name="contraseña" placeholder="Ingrese contraseña">
        </div>
        <br><input type="submit" name="boton" class="boton" value="Ingresar">
        <br><br><a class="link" href="index.html"><br>Volver a página principal</a>
    </div>
    </form>
</body>
</html>