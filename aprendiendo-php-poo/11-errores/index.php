<?php

// Capturar excepciones en código susceptible a errores
try {

    if (isset($_GET['id'])) {
        echo "<h1>El parametro es: {$_GET['id']} </h1>";
    } else {
        throw new Exception("Faltan parametros por la URL");
    }
} catch (Exception $e) {
    echo "Ha habido un error " . $e->getMessage() . "<br>";

    // Al finalizar toda la estructura el finally se ejecuta, es decir de manera fija
} finally {
    echo "Hola";
}
