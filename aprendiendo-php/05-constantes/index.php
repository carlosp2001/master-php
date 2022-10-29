<?php
// Constantes
// Es un contenedor de información que no puede cambiar

define('nombre', 'Carlos Pineda');
define('web', 'youtube.com');

echo '<h1>' . nombre . '</h1>';
echo '<h1>' . web . '</h1>';

// Variables
$web = "carlospineda.com";
$web = "youtube.com";
echo '<h1>' . $web . '</h1>';

// Constantes Predefinidas

echo PHP_VERSION;
echo PHP_OS;

function holaMundo() {
    echo __FUNCTION__;
}