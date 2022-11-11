<?php

function autocargar_clases($class)
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once 'clases/' . $class . '.php';
}

spl_autoload_register('autocargar_clases');
