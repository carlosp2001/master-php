<?php
/*
 * Ejercicio 6. Mostrar una tabla de multiplicar de html con las tablas de multiplicar
 *
 */

echo "<table border='1'> <tr>"; // inicio de tablas
echo "<tr>"; // inicio de fila 1 de celdas
for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
    echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>"; // cierre de fila 1 de celdas

for ($y=1; $y<=10; $y++) {
    echo "<tr>"; // inicio fila 2
    for ($i = 1; $i <= 10; $i++) {
        echo "<td>";
        echo "$i x $y";
        echo "</td>";
    }
    echo "</tr>"; // cierre fila 2
}
echo "</table>"; // fin de tabla
