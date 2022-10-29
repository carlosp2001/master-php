<?php
/*
 * Ejercico 3: Programa que compruebe si una variable esta vaci y si esta vacia, rellenarla con texto en
 * minusculas y mostrarlo en mayusculas y en negrita.
 */

$texto = "";

if (empty($texto)) {
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMayus = strtoupper($texto);
    echo "<strong>" . $textoMayus . "</strong>";
} else {
    echo "La variable tiene este contenido dentro: " . $texto;
}


