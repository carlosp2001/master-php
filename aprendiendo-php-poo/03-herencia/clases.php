<?php
// Herencia: Es la posibilidad de compartir atributos y metodos entre clases.

class Persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando";
    }
}

// Extends se utiliza para seleccionar la clase de la cual queremos heredar.
class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }


    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar()
    {
        return "Soy programador";
    }

    public function repararOrdenador()
    {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica()
    {
        return "Estoy esribiendo en word";
    }
}

class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        // Se heredan las propiedades seteadas en la clase hijo
        parent::__construct();
        $this->auditarRedes = "experto";
        $this->experienciaRedes = 5;
    }

    public function auditoria()
    {
        return "Estoy auditando una red";
    }

}