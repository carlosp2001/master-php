<?php

// Iniciar la sesión y la conexión a bd

require_once 'includes/conexion.php';
session_start();
if (isset($_POST)) {

    if(isset($_SESSION['error_login'])){
        $_SESSION['error_login'] = null;
    }

    // Recoger los datos del formulario.

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuario
    $sql = "select * from usuarios where email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña
//        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        $verify = password_verify($password, $usuario['password']);

        if($verify) {
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

        } else {
            // mensaje de error
            $_SESSION['error_login'] = "Login Incorrecto" . mysqli_error($db);
        }
    } else {
        // mensaje de error
        $_SESSION['error_login'] = "Login Incorrecto" . mysqli_error($db);
    }


}

// Redirigir al coche.php
header('Location: coche.php');
