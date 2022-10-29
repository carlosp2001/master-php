<?php
/*
 * Ejercicio 5: Crear un array con el contenido de la tabla:
 * Accion Aventura      Deportes
 * GTA    Assasins      Fifa 19
 * COD    Crash         PES 19
 * PUBG   Prince        MOTO GP 19
 * cada columna debe ir en un fichero separado
 */

$tabla = array(
    "ACCION" => ["GTA 5", "Call of Duty", "PUBG"],
    "AVENTURA" => ["Assasins Creed", "Crash Bandicot", "Prince of Persia"],
    "DEPORTE" => ["FIFA 19", "PES 19", "MOTO GP"]
);
$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>





</table>