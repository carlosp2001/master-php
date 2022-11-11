<?php

class Coche
{
    // Atributos o propiedas (variables como en la Programacion estructurada)
    // Public: Podemos acceder a el desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o fuera de la clase
    public $color;

    // Protected: podemos acceder desde la clase que los define y desde clases que hereden esta clase.
    protected $marca;

    // Private: únicamente se pueden acceder desde esta clase la que los define
    private $modelo;


    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
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

    // Indicar que tipo de dato puede ser el parametro
    public function mostrarInformacion(Coche $miObjeto)
    {
        if (is_object($miObjeto)) {
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "<br>Color del coche " . $miObjeto->color;
            $informacion .= "<br>Modelo del coche " . $miObjeto->modelo;
            $informacion .= "<br>Velocidad " . $miObjeto->velocidad;
        } else {
            $informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;

    }
} // fin definicion de la clase
