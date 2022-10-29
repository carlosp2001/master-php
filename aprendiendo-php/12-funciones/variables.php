<?php

/*
 * Variables locales: Son las que se definen dentro de una función y no pueden ser usadas fuera de la
 * función, solo estan disponibles dentro. A no ser que hagamos un return.
 *
 * Variables globales: Son las que fuera de una funcioón y estan disponibles dentro y fuera de las
 * funciones
 */

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres<br>";

echo $frase;

function holaMundo() {
    global $frase;
    echo $frase;
    $year = 2019;
//    echo "<h1>$year</h1>";
    return $year;
}

echo holaMundo();

// Funciones variables

function buenosDias() {
    return "Hola! Buenos días :)";
}

function buenasTardes() {
    return "Hey! Que tal ha ido la comida?";
}

function buenasNoches() {
    return "Te vas a dormir ya? Buenas noches!";
}

$horario = "Noches";
$miFuncion = "buenas".$horario;
echo $miFuncion();