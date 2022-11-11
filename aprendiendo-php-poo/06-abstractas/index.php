<?php
// Clase abstracta: Es una clase en la cual no podemos crear objetos con ella pero si podemos
// utilizarla para heredar de ella
abstract class Ordenador
{

    public $encendido;

    // Metodos abstractos: no sabemos que haran en la clase hija pero si necesitamos definir funcionalidad
    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador  {
    public $software;

    public function arranacarSoftware() {
        $this->software= true;
    }

    public function encender()
    {
        // TODO: Implement encender() method.
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arranacarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);