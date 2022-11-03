<?php require_once 'helpers.php'; ?>

<!--BARRA LATERAL-->
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Identifícate</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">
        </form>
    </div>
    <div id="register" class="bloque">
        <!--        --><?php //if (isset($_SESSION['errores'])):
        //            var_dump($_SESSION['errores']);
        //        endif;
        //        ?>
        <h3>Registrate</h3>
        <?php
        if (isset($_SESSION['completado'])) {
            echo "<div class='alerta'>" . $_SESSION['completado'] . "</div>";
        } else if (isset($_SESSION['errores']['general'])) {
            echo "<div class='alerta alerta-error'>" . $_SESSION['errores']['general'] . "</div>";
        }
        ?>
        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ?>

            <label for="email">Email</label>
            <input type="email" name="email">
            <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>

            <input type="submit" value="Registrar" name="submit">
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>
