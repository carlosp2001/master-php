<?php
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/helpers.php';
?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada_actual['id'])) {
    header("Location: coche.php");
}
?>
<?php
require_once 'includes/lateral.php';
?>
<!--Caja Principal-->
    <div id="principal">
        <h1>Editar entrada</h1>
        <p>Edita tu entrada <?= $entrada_actual['titulo']?></p>
        <form action="guardar-entrada.php?editar=<?= $entrada_actual['id'] ?>" method="post">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="<?= $entrada_actual['titulo'] ?>">
            <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : '' ?>

            <label for="descripcion">Descripción</label>
            <textarea name="descripcion"><?= $entrada_actual['descripcion'] ?></textarea>
            <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : '' ?>

            <label for="categoria">Categoría</label>
            <select name="categoria">
                <?php $categorias = conseguirCategorias($db);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?> ><?= $categoria['nombre'] ?></option>"
                    <?php
                    endwhile;
                endif;
                ?>
            </select>
            <?= isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : '' ?>

            <input type="submit" value="Guardar">
        </form>
        <?php borrarErrores(); ?>
    </div>


<?php require_once 'includes/pie.php' ?>