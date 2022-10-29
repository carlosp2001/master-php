<?php

/*
 * FOR
 * for(variable contador, condicion, incremento de contador){
 *  // BLOQUE DE INSTRUCCIONES
 * }
 */

$resultado = 0;
for ($i = 0; $i <= 100; $i++) {
    $resultado += $i;
}

echo "<h1>El resultado es: $resultado</h1>";

// Ejemplo tabla de multiplicar

if (isset($_GET['numero'])) {
    // Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

// var_dump($numero);

echo "<h1>Tabla de Multiplicar del numero $numero</h1>";

for ($contador = 1; $contador <= 10; $contador++) {
    if ($numero == 45) {
        echo "No se puede mostrar esta acción";
        break;
    }
    echo "$numero x $contador = " . ($numero * $contador) . "<br>";

}