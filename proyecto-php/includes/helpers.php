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

function conseguirCategoria($conexion, $id)
{
    $sql = "select * from categorias where id = $id";
    $categorias = mysqli_query($conexion, $sql);
    $resultado = [];
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);
    }
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null)
{
    $sql = "select e.id as 'entrada_id', e.*, c.* from entradas e inner 
    join categorias c on e.categoria_id = c.id ";

    if (!empty($categoria) && is_int((int)$categoria)) {
        $sql .= "WHERE e.categoria_id = $categoria";
    }

    if (!empty($busqueda)) {
        $sql .= "WHERE e.titulo like '%$busqueda%'";
    }

    $sql .= " order by e.id desc";

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

function conseguirEntrada($conexion, $id)
{
    $sql = "select e.*, c.nombre as 'categoria', concat(u.nombre, ' ', u.apellidos) as 'usuario' 
    from entradas e 
    inner join categorias c on e.categoria_id = c.id
    inner join usuarios u on e.usuario_id = u.id
                                    where e.id = $id";
    $entrada = mysqli_query($conexion, $sql);
    $resultado = [];
    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $resultado = mysqli_fetch_assoc($entrada);
    }
    return $resultado;
}



