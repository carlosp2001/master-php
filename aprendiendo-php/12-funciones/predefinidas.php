<?php

// Debuggear
$nombre = "Carlos Pineda";
var_dump($nombre);

// Fechas
echo date('d-m-y') . "<br>";
echo time() . "<br>";

// Matemáticas
echo "Raíz cuadrada de 10: " . sqrt(10) . "<br>";

echo "Numero pi: " . pi() . "<br>";

echo "Redondear: " . round(7.891234, 2) . "<br>";

// Numero aleatorio
echo "Numero Aleatorio entre 10 y 40: " . rand(10, 40);

// Más funciones generales
echo gettype($nombre) . "<br>";

// Detectar tipo
if (is_string($nombre)) {
    echo "Esa variable es un string<br>";
}

// Comprobar si existe una variable
if (!is_float($nombre)) {
    echo "La variable nombre no es un número con decimales<br>";
}

echo "<br>";
if (isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

// Limpiar espacios
echo "<br>";
$frase = "     mi contenido    ";
echo trim($frase);
var_dump(trim($frase));

// Eliminar variables / indices
$year = 2020;
unset($year);
/*var_dump($year);*/

// Comprobar variable vacía
$texto = "    ";
if (empty(trim($texto))) {
    echo "La variable texto esta vacia <br>";
} else {
    echo "La variable texto TIENE CONTENIDO <br>";
}

//  Contar caracteres de una cadena o string
$cadena = "12345";
echo strlen($cadena) . "<br>";

// Encontrar carácter
$frase = "La vida es bella";
echo strpos($frase, "vida");
echo "<br>";

// Reemplazar contenido de un string
$frase = str_replace("vida", "moto", $frase);
echo "<br>";

// Mayúsculas y minúsculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);