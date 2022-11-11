<?php
// Destructor: La referencia a la clase se destruye ya no existe, detecta cuando el objeto no sera nunca más usado

class Usuario
{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre="Carlos Pineda";
        $this->email = "carlos@carlos.com";
        echo "Creando del objeto creada";
    }

    public function __toString() {
        return "Hola {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct()
    {
        echo "Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email . "<br>";

//for ($i = 0; $i <= 200; $i++) {
//    echo $i . "<br>";
//}