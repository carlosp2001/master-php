<?php

if (isset($_POST)) {
    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Iniciar sesion
    if (!isset($_SESSION)) {

        session_start();
    }

    // Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, trim($_POST['nombre'])) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, trim($_POST['apellidos'])) :
        false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : false;

    // Array errores
    $errores = [];
    // Validar datos antes de guardarlos en la base de datos
    // Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    // Validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validados = true;
    } else {
        $apellidos_validados = false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }

    // Validar campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es válido";
    }

    // Validar campo contraseña
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contraseña es inválida";
    }
}
var_dump($errores);

$guardar_usuario = false;
if (count($errores) == 0) {
    $guardar_usuario = true;
    // Cifrar password
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
//    var_dump(password_verify($password, $password_segura));
//    die();
    // Insertar usuarios en la base de datos en su tabla correspondiente
    $sql = "insert into usuarios values (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
    $guardar = mysqli_query($db, $sql);
    if ($guardar) {
        $_SESSION['completado'] = "El registro se ha completado con éxito";
    } else {
        $_SESSION['errores']['general'] = "Falló al guardar el usuario!!";
    }

} else {
    $_SESSION['errores'] = $errores;
}

header('Location: index.php');
