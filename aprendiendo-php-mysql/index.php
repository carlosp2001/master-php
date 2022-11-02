<?php
// Conectar a la base de datos
$conexion = mysqli_connect('127.0.0.1', 'carlosp2001', '1C@rlitos', 'phpmysql');

// Comprobar si conexion es correcta
if (mysqli_connect_errno()) {
    echo "La conexión a la base de datos de MYSQL ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexion realizada correctamente";
}

// Consultar para configurar la codificación de caracteres
mysqli_query($conexion, "set names 'utf-8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "select * from notas");

while ($nota = mysqli_fetch_assoc($query)) {
    echo '<h2>' . $nota['titulo'] . '</h2>';
    echo $nota['descripcion'];
}

// Insertar en la base de datos desde PHP
$sql = "insert into notas values (null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";
if($insert) {
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "Error: " . mysqli_error($conexion);
}