<?php

/* BUCLE WHILE
Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario,
en base a una condición.

while(condicion) {
    bloque de instrucciones
}
*/

$numero = 0;
while ($numero <= 100) {
    echo "$numero";
    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
}

echo "<hr>";

// Ejemplo

if (isset($_GET['numero'])) {
    // Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

// var_dump($numero);

echo "<h1>Tabla de Multiplicar del numero $numero</h1>";

$contador = 0;

while ($contador <= 10) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";
    $contador++;
}

/*
// DO WHILE
do {
    // BLOQUE DE INSTRUCCIONES
} while (condicion)
*/
echo "<hr>";

$edad = 18;

do {
    echo "Tienes acceso al local privado $contador";
    $contador++;
} while($edad >= 18 && $contador <= 10);
