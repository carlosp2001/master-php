<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formularios</title>
</head>
<body>
<h1>Validar formularios en PHP</h1>
<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == 'faltan_valores') {
        echo "<strong style='color: red'>Introduce todos los datos en todos los campos de 
formulario</strong>";
    }

    if ($error == 'nombre') {
        echo "<strong style='color: red'>Introduce bien el nombre</strong>";
    }

    if ($error == 'apellidos') {
        echo "<strong style='color: red'>Los apellidos no son correctos</strong>";
    }

    if ($error == 'edad') {
        echo "<strong style='color: red'>Introduce una edad correcta</strong>";
    }

    if ($error == 'email') {
        echo "<strong style='color: red'>El correo es erróneo</strong>";
    }

    if ($error == 'password') {
        echo "<strong style='color: red'>Introduce una contraseña de mas de 5 letras</strong>";
    }
}
?>
<form method="post" action="procesar_formulario.php">
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" pattern="[A-Za-z]+" required="required"><br>

    <label for="apellidos">Apellidos</label><br>
    <input type="text" name="apellidos" pattern="[A-Za-z]+" required="required"><br>

    <label for="edad">Edad</label><br>
    <input type="number" name="edad" required="required" pattern="[0-9]+"><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" required="required"><br>

    <label for="pass">Contraseña</label><br>
    <input type="password" name="pass" required="required"><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php
