<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
<h1>Master en <?php echo 'PHP' ?></h1>
<?= "Bienvenido al curso de PHP" ?>
<?php
// Titular de la sección
echo "<h3>Listado de Videojuegos:</h3>";

/*
    Esta es una lista de videojuegos moderno
 */
echo "<ul>"
    . "<li>GTA</li>"
    . "<li>Fifa</li>"
    . "<li>Mario Bros</li>"
    . "</ul>";

echo "<br>HOLA HOLA HOLA<br>";
// Parrafo explicativo
echo '<p>Esta es toda' . ' - ' . 'lista de juego</p>';
?>
</body>
</html>

