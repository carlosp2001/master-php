<?php

//// Abrir archivo
//$archivo = fopen("fichero_texto.txt", "a+");
//
///*
// * Permisos
// * a+ = leer y escribir
// * r = leer
// * w = escribir
// */
//
//// Leer contenido
//// Leer una sola linea
////$contenido = fgets($archivo);
////echo $contenido;
//
//while (!feof($archivo)) {
//    $contenido = fgets($archivo);
//    echo $contenido . "<br>";
//}
//
//// Escribir
//fwrite($archivo, "\nsoy un texto metido desde php");
//
//// Cerrar archivo
//fclose($archivo);

// Copiar un fichero
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");
//
//// Renombrar fichero
//rename("fichero_copiado.txt", 'archivito_recopiado.txt');
//
//// Eliminar fichero
//unlink("archivito_recopiado.txt") or die("Error al borrar");

// Comprobar si existe el archivo
if (file_exists("fichero_texto.txt")) {
    echo "El archivo existe!";
} else {
    echo "NO EXISTE!";
}
