<?php
if (isset($_POST)) {
    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    // Array de errores
    $errores = array();

    // Validar campo titulo
    if (empty($titulo)) {
        $errores['titulo'] = "El título no es válido";
    }

    if (empty($descripcion)) {
        $errores['descripcion'] = "La descripción no es válida";
    }

    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = "La categoria no es válida";
    }

    if (count($errores) == 0) {
        $sql = "insert into entradas values (null, '$usuario', '$categoria', '$titulo', '$descripcion', curdate());";
        $guardar = mysqli_query($db, $sql);
        mysqli_error($db);
        header('Location: index.php');
    } else {
        $_SESSION["errores_entrada"] = $errores;
//        var_dump($errores);
        header('Location: crear-entradas.php');
    }
}
