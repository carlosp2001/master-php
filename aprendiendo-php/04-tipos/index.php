<?php
/*
 * TIPOS DE DATOS:
 * Entero (int/ integer) = 99
 * Coma flotante / decimales (float / double) = 3.45,
 * Cadenas (string) = "Hola yo soy un string"
 * Boleano (bool) = true / false
 * null
 * Array
 * Objetos
 */

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto \n \t \r \" $numero";
$verdadero = true;
$nula = null;
echo gettype($numero);
echo gettype($decimal);
echo gettype($texto);
echo gettype($verdadero);
echo $texto;
// Debugear
$mi_nombre[] = 'Carlos Pineda';
$mi_nombre[] = 'Carlos Pineda';
// var_dump($mi_nombre);