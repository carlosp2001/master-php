<?php
/*
 * Arrays Un arrays es una colección o un conjunto de datos/valores bajo un único nombre y para acceder
 * a esos valores podemos usar un índice numérico o alfanumérico.
 */

$pelicula = "Batman";
$peliculas = array("Batman", "Spiderman", "El señor de los anillos");
var_dump($peliculas[0]);

// Array asociativo
$personas = ['nombre' => 'Carlos', 'apellidos' => 'Pineda', 'web' => 'carlospinedaweb@gmail.com'];
var_dump($personas["apellidos"]);

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
var_dump($cantantes);

echo "<br>";
echo $peliculas[0];
echo "<br>";
echo $cantantes[2];

// Recorrer con for
echo "<br>";
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++){
    echo "<li>$peliculas[$i]</li>";
}
echo '</ul>';

// Recorrer con foreach
echo "<h1>Listado de cantantes</h1>";
foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";;
}

// Arrays multidimensionales
$contactos = array(array('nombre' => 'Carlos',
    'email' => 'cara_p@unicah.edu'),
    array('nombre' => 'Antonio',
        'email' => 'antonio_p@unicah.edu'),
    array('nombre' => 'Marcos',
        'email' => 'marcos_p@unicah.edu'));

echo "<br>";
echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto) {
    var_dump($contacto);
}