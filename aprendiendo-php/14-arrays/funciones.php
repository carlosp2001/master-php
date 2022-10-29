<?php
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 2, 5, 8, 4];
asort($cantantes); // Ordena alfabéticamente
var_dump($cantantes);
arsort($cantantes); // // Ordena alfabéticamente de reversa
var_dump($cantantes);
sort($cantantes); // // Ordena palabras y numeros

// Añadir elementos a un array
echo "<hr>";
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

// Eliminar elemento del array
echo "<br>";
array_pop($cantantes);
unset($cantantes[2]);

// Aleatorio
echo "<br>";
$indice = array_rand($cantantes);
echo "$indice => $cantantes[$indice]";
echo "<hr>";

// Dar la vuelta retorna el nuevo arreglo
var_dump(array_reverse($numeros));
echo "<br>";

// Buscar dentro de un array
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);
echo "<br>";

// Contar número de elementos
echo count($cantantes);
echo "<br>";




