<?php
// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con características parecidas
class Coche
{
    // Atributos o propiedas (variables como en la Programacion estructurada)
    public $color = 'rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // Métodos antes conocidos como funciones, son acciones que haace el objeto (antes funciones).
    public function getColor()
    {
        // Busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }
} // fin definicion de la clase

// Crear un objeto / Instanciar la clase
$coche = new Coche();

// Usar los metodos

$coche->setColor('Amarillo');
echo "El color del coche es: " . $coche->getColor() . "<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: " . $coche->getVelocidad() . "<br>";

// Nueva instancia
$coche2 = new Coche();
$coche2->setColor('Verde');
$coche2->setModelo("Gallardo");
var_dump($coche);
var_dump($coche2);