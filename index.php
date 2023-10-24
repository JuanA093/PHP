<?php
    require "Conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>DB Connectt</title>
</head>
<body>
    <h1>DataBase Connect</h1>
        <form action="usuarios.php" method="post" class="formulario">
            <input type="number" name="No_Identificacion" placeholder="No_Identificacion ">
            <input type="text" name="Nombres" placeholder="Nombres">
            <input type="text" name="Apellidos" placeholder="Apellidos">
            <input type="text" name="Correo" placeholder="Correo">
            <input type="text" name="Telefono" placeholder="Telefono">
            <input type="text" name="Direccion" placeholder="Direccion">
            <button type="submit" class="btnenviar" name = "enviar">Enviar</button>
            <button type="submit" class="btnenviar" name= "buscar">Buscar</button>
            <button type="submit" class="btnenviar" name= "actualizar">Actualizar</button>
        </form>
</body>
</html>

