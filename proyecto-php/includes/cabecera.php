<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--CABECERA-->
<header id="cabecera">
    <!--LOGO-->
    <div id="logo">
        <a href="index.php">
            Blog de Videojuegos
        </a>
    </div>
    <!--MENU-->

    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)): ?>
                    <li>
                        <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                    </li>
                <?php endwhile; endif; ?>
            <li>
                <a href="index.php">Sobre mí</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
    <div class="clear-fix"></div>
</header>
<div id="contenedor">
