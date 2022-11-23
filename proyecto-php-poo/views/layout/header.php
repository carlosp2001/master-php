<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
<div id="container">
    <!--CABECERA-->
    <header id="header">
        <div id="logo">
            <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo">
            <a href="index.php">
                Tienda de Camisetas
            </a>
        </div>
    </header>

    <!--MENU-->
    <?php $categorias = Utils::showCategorias(); ?>
    <nav id="menu">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <?php
                while ($cat = $categorias->fetch_object()):
            ?>
            <li>
                <a href="#"><?= $cat->nombre ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
    </nav>

    <div id="content">
