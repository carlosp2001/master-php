<?php

//require_once 'clases/UsuarioController.php';
//require_once 'clases/categoria.php';
//require_once 'clases/entrada.php';


//
//$usuario = new Usuario();
//echo $usuario->nombre;
//echo "<br>";
//echo $usuario->email;
//
//$categoria = new Categoria();
//echo $categoria->nombre;

require_once 'autoload.php';

// Espacios de nombres y paquetes.
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;

// Importar la clase y paquete con un diferente nombre.
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal
{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param Categoria $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return Entrada
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * @param Entrada $entrada
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
    }

    function informacion()
    {
        // Nombre de la clase
        echo __CLASS__ . "<br>";
        // Nombre del metodo
        echo __METHOD__ . "<br>";
        // Ruta del archivo
        echo __FILE__ . "<br>";
        // Nombre de traits
        echo __TRAIT__ . "<br>";

        echo __NAMESPACE__ . "<br>";
    }

}

// Objeto Principal
$principal = new Principal();
$principal->informacion();
var_dump($principal->usuario);
echo "<hr>";

// Comprobar si existe un método
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);
echo "<hr>";

// Objeto otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);
echo "<hr>";
$usuario->informacion();

// Comprobar si existe una clase, aunque no este cargada
// @ evita que se muestren los warning
$clase = @class_exists('MisClases\Usuario');
if ($clase) {
    echo "<h1>La clase SI existe</h1>";
} else {
    echo "<h1>La clase NO existe</h1>";
}