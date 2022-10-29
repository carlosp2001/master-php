<?php
/*
 * FUNCIONES:
 * Una funcion ees un conjunto de instrucciones agrupadas bajo un nombre concreto y que puede
 * reutilizarse solamente invocando a la función tantas veces como querramos
 *
 * function nombreDeMiFuncion ($parametro) {
 *  // BLOQUE DE INSTRUCCIONES
 * }
 *
 * nombreDeMiFuncion($mi_parametro);
 */

// Ejemplo

function muestraNombres()
{
    echo "Carlos Pineda <br>";
    echo "Carlos Pineda <br>";
    echo "Carlos Pineda <br>";
    echo "Carlos Pineda <br>";
    echo "</hr>";
}

// Invocar funcion
muestraNombres();
muestraNombres();
muestraNombres();

// Ejemplo 2
function tabla($numero)
{
//    var_dump($numero);
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
} else {
    echo "No existe el parametro numero";
}

for ($i = 0; $i <= 10; $i++) {
    tabla($i);
}

// Ejemplo 3

function calculadora($numero1, $numero2, $negrita=false)
{
    // conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 = $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $cadena_texto = "";
    if ($negrita != false) {
        $cadena_texto .= "<h1>";
    }
    $cadena_texto .= "Suma: $suma <br>";
    $cadena_texto .= "Resta: $resta <br>";
    $cadena_texto .= "Multiplicacion: $multi <br>";
    $cadena_texto .= "División: $division <br>";

    if ($negrita != false) {
        $cadena_texto .= "</h1>";
    }
    //var_dump($cadena_texto);
    return $cadena_texto;
}

echo calculadora(10, 30, false);

// Ejemplo 4

function getNombre($nombre) {
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos) {
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
        . "<br>" .
        getApellidos("Pineda ");
    return $texto;
}

//devuelveElNombre("Carlos Pineda");

echo devuelveElNombre("Carlos", "Pineda");
//echo getNombre("Paco");




