<?php
/*
 * Condicionales
 *
 * // CONDICIONAL IF:
 * if(condicion) {
 *  instrucciones
 * } else {
 *  otras instrucciones
 * }
 *
 *
 * // OPERADORES DE COMPARACIÓN
 * == igual
 * === idéntico
 * != diferente
 * <> diferente
 * !== no idéntico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 *
 *
 * // OPERADORES LOGICOS
 * && AND Y
 * || OR O
 * ! NOT NO
 * and, or
 *
 */

// Ejemplo 1
$color = 'rojo';
if ($color == 'verde') {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

// Ejemplo 2
echo '<br>';
$year = 2019;
if ($year != 2019) {
    echo "Es un año diferente a 2019";
} else {
    echo "Estamos en 2019";
}

// Ejemplo 3
echo '<br>';
$nombre = "Carlos Pineda";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

// Ejemplo 4
echo "<br>";

$dia = 3;
//if ($dia == 1) {
//    echo "Es Lunes";
//} else {
//    if ($dia == 2) {
//        echo "Es Martes";
//    } else {
//        if ($dia == 3) {
//            echo "Es Miercoles";
//        } else {
//            if ($dia == 4) {
//                echo "Jueves";
//            } else {
//                if ($dia == 4) {
//                    echo "Es Jueves";
//                } else {
//                    if ($dia == 5) {
//                        echo "Es Viernes";
//                    } else {
//                        echo "Es fin de semana";
//                    }
//                }
//            }
//        }
//    }
//}

if ($dia == 1) {
    echo "LUNES";
} elseif ($dia == 2) {
    echo "MARTES";
} elseif ($dia == 3) {
    echo "MIERCOLES";
} elseif ($dia == 4) {
    echo "JUEVES";
} elseif ($dia == 5) {
    echo "VIERNES";
} else {
    echo "FIN DE SEMANA";
}

// SWITCH
$dia = 4;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "ES FIN DE SEMANA";
}

// Ejemplo 5
echo '<br>';
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

echo '<br>';
$pais = "Mexico";
if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "No se habla espańol";
}

// GOTO
goto marca;
echo "<h3>Instruccion 1:</h3>";
echo "<h3>Instruccion 2:</h3>";
echo "<h3>Instruccion 3:</h3>";
echo "<h3>Instruccion 4:</h3>";

marca:
    echo "<h1>Me he saltado 4 echos</h1>";


