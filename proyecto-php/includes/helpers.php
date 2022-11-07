<?php

function mostrarError($errores, $campo)
{
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    }
    return $alerta;
}

function borrarErrores()
{
    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    return $borrado;
}

function conseguirCategorias($conexion)
{
    $sql = "select * from categorias order by id asc";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = [];
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null)
{
    $sql = "select e.*, c.* from entradas e inner 
    join categorias c on e.categoria_id = c.id 
                order by e.id desc";
    if ($limit) {
        $sql .= " limit 4";
    }
    $entradas = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }

    return $resultado;
}

