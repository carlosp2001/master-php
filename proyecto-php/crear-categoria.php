<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>

<div id="principal">
    <h1>Crear Categorías</h1>
    <p>Añade nuevas categorías al blog para que los usuarios puedan usarlas al crear sus entradas</p>
    <form action="guardar-categoria.php" method="post">
        <label for="nombre">Nombre de la Categoría</label>
        <input type="text" name="nombre">

        <input type="submit" value="Guardar">
    </form>

</div>
<!--    fin principal-->

<?php require_once 'includes/pie.php' ?>
