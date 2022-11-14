<?php
require_once '../vendor/autoload.php';

// Conexion bd
$conexion = new mysqli('127.0.0.1', 'carlosp2001', '1C@rlitos', 'notas_master');
$conexion->query("SET NAMES 'utf-8'");

// Consulta para contar elementos totales
$consulta = $conexion->query("select count(id) as 'total' from notas");
$numero_elementos = (int)$consulta->fetch_object()->total;
$numero_elementos_pagina = 2;
var_dump($numero_elementos);

// Hacer paginacion
$pagination = new Zebra_Pagination();

// Numero total de elementos a paginar
$pagination->records($numero_elementos);

// Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();
$empieza_aqui = ($page - 1) * $numero_elementos_pagina;
$notas = $conexion->query("Select * from notas limit $empieza_aqui, $numero_elementos_pagina");
?>
    <link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">
<?php
while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3><hr>";
}

$pagination->render();