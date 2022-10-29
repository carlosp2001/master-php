<?php

// Crear directorios
if (!is_dir("mi_carpeta")) {
    mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
} else {
    echo "Ya existe la carpeta";
}

// Eliminar directorios
//rmdir("mi_carpeta");

// Cambiar permisos a directorios
//chmod('mi_carpeta', 0777);

echo substr(sprintf('%o', fileperms('/Applications/XAMPP/xamppfiles/htdocs/master-php/aprendiendo-php/21-directorios')), -4);

echo "<hr><h1>Contenido de mi carpeta</h1>";
if ($gestor = opendir('./mi_carpeta')) {
    while (false != ($archivo = readdir($gestor))) {
        if ($archivo != "." && $archivo != "..") {
            echo $archivo . "<br>";
        }
    }
}


