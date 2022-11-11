<?php

namespace PanelAdministrador;

class Usuario
{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Alberto Pineda";
        $this->email = "alberto@alberto.com";
    }

    function informacion()
    {
        // Nombre de la clase
        echo "Nombre de la clase: " . __CLASS__ . "<br>";
        // Nombre del metodo
        echo "Nombre el metodo: " . __METHOD__ . "<br>";
        // Ruta del archivo
        echo "Ruta del archivo: " . __FILE__ . "<br>";
        // Nombre de traits
        echo "Nombre de trait: " . __TRAIT__ . "<br>";

        echo "Nombre de namespace: " . __NAMESPACE__ . "<br>";
    }
}
