<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>

<!--Caja Principal-->
<div id="principal">
    <h1>Mis datos</h1>

    <?php
    if (isset($_SESSION['completado'])) {
        echo "<div class='alerta'>" . $_SESSION['completado'] . "</div>";
    } else if (isset($_SESSION['errores']['general'])) {
        echo "<div class='alerta alerta-error'>" . $_SESSION['errores']['general'] . "</div>";
    }
    ?>
    <form action="actualizar-usuario.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre'] ?>">
        <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos'] ?>">
        <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['usuario']['email'] ?>">
        <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>

        <input type="submit" value="Actualizar" name="submit">
    </form>
    <?php borrarErrores(); ?>

</div>


<!--    fin principal-->

<?php require_once 'includes/pie.php' ?>
