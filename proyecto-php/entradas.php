<?php require_once 'includes/cabecera.php' ?>

<?php require_once 'includes/lateral.php' ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Todas las entradas</h1>
    <?php
    $entradas = conseguirEntradas($db, null);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
            ?>
            <article class="entrada">
                <a href="entrada.php?id=<?= $entrada['entrada_id'] ?>">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class="fecha"><?= $entrada['nombre'] . ' | ' . $entrada['fecha'] ?></span>
                    <p><?= substr($entrada['descripcion'], 0, 180) . "..." ?></p>
                </a>
            </article>
        <?php
        endwhile;
    endif;
    ?>

</div>
<!--    fin principal-->

<?php require_once 'includes/pie.php' ?>
