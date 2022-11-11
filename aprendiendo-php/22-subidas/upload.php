<?php

$archivo = $_FILES['archivo'];
//var_dump($archivo);
//die();

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
    if (!is_dir('images')) {
        mkdir('images');
        chmod('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'. $nombre);
    echo "<h1>Imagen subida correctamente</h1>";
    header("Refresh: 3; URL=coche.php");
} else {
    header("Refresh: 3; URL=coche.php");
    echo "<h1>Sube una imagen con el formato correcto</h1>";
}




