<?php

// Trait: Nos permite crear metodos para diferentes clases sin necesidad de heredar
trait Utillidades
{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es $this->nombre</h1>";
    }
}

class Coche
{
    public $nombre;
    public $marca;
    use Utillidades;
}

class Persona
{
    public $nombre;
    public $apellidos;
    use Utillidades;
}

class Videojuego
{
    public $nombre;
    public $anio;
    use Utillidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();
$coche->nombre = "Ferrari Testarosa";
$videojuego->nombre = "GTA V";
$persona->nombre = "Mario";
$coche->mostrarNombre();
$persona->mostrarNombre();
$videojuego->mostrarNombre();
var_dump($coche);