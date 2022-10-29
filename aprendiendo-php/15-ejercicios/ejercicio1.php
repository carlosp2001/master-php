<?php
/*
 * Ejercicio1. Hacer programa con un array de 8 números enteros y que haga lo siguiente
 * - Recorrerlo y mostrarlo
 * - Ordenarlo y mostrarlo
 * - Mostrar su longitud
 * - Buscar un elemento
 */

$numeros = [2, 3, 4, 5, 6, 7, 8, 1];
//foreach ($numeros as $numero) {
//    echo "$numero<br>";
//}

// Funciones
function mostrarArray($numeros)
{
    $resultado = "";

    foreach ($numeros as $numero) {
        $resultado .= $numero . "<br>";
    }
    return $resultado;
}

echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);


echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros);

echo "<h1>Mostrar longitud</h1>";
echo count($numeros);

// Busqueda en el array
echo "<br>";
if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar en el array la variable $busqueda</h1>";

    $resultado = array_search($busqueda, $numeros);
    if ($resultado) {
        echo "$resultado";
    } else {
        echo "No existe el numero buscado";
    }
} else {
    echo "No se ha recibido ningun parametro";
}