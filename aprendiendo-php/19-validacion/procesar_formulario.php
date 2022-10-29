<?php
$error = 'faltan_valores';
if (!empty($_POST['nombre']) &&
    !empty($_POST['apellidos']) &&
    !empty($_POST['edad']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pass'])) {
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validar el nombre
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
        $error = 'nombre';
    }

    // Validar apellidos
    if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
        $error = 'apellidos';
    }

    // Validar edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }

    // Validar email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }

    // Validar pass
    if (empty($pass) && strlen($pass)<5) {
        $error = 'password';
    }


} else {
    header("Location: index.php?error=$error");
}

if ($error != "ok") {
    header("Location:index.php?error=$error");
}
?>
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
<?php if ($error == "ok") { ?>
    <h1>Datos validados correctamente</h1>
    <p><?= $nombre ?></p>
    <p><?= $apellidos ?></p>
    <p><?= $edad ?></p>
    <p><?= $email ?></p>
<?php } ?>

</body>
</html>
