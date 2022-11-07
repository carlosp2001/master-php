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

}
var_dump($errores);

$guardar_usuario = false;
if (count($errores) == 0) {
    $guardar_usuario = true;
    $usuario = $_SESSION['usuario'];

    // Comprobar si el email ya existe
    $sql = "select id, email from usuarios where email = '$email'";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);

    if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {

        // Actualizar usuarios en la base de datos en su tabla correspondiente
        $sql = "update usuarios set nombre = '$nombre', apellidos = '$apellidos', email = '$email' where id = " . $usuario['id'];
        $guardar = mysqli_query($db, $sql);
        if ($guardar) {
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
        } else {
            $_SESSION['errores']['general'] = "Falló al actualizar tus datos!!";
        }
    } else {
        $_SESSION['errores']['general'] = "El usuario ya existe!!";
    }
} else {
    $_SESSION['errores'] = $errores;
}

header('Location: mis-datos.php');
