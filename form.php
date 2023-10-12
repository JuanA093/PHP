<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Connect DB</title>
</head>
<body>
    <h1>DataBase Connect</h1>
    <form action="DBConnect.php" method="post" class="formulario">
        <input type="number" name="No_Identificacion" placeholder="No_Identificacion ">
        <input type="text" name="Nombres" placeholder="Nombres">
        <input type="text" name="Apellidos" placeholder="Apellidos">
        <input type="text" name="Correo" placeholder="Correo">
        <input type="text" name="Telefono" placeholder="Telefono">
        <input type="text" name="Direccion" placeholder="Direccion">
        <button type="submit" class="btnenviar">Enviar</button>
    </form>
</body>
</html>