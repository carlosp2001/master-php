<?php
// Interfaz: Es un contrato en el cual definimos que metods y en que orden seran usados al momento de implementar en
// en una clase

interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

// Uso de implements para usar la interfaz
class iMac implements Ordenador {
    private $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {
        // TODO: Implement encender() method.
    }

    public function apagar()
    {
        // TODO: Implement apagar() method.
    }

    public function reiniciar()
    {
        // TODO: Implement reiniciar() method.
    }

    public function desfragmentar()
    {
        // TODO: Implement desfragmentar() method.
    }

    public function detectarUSB()
    {
        // TODO: Implement detectarUSB() method.
    }


}

$maquintosh = new iMac();
$maquintosh->setModelo("Macbook Pro 2019");
var_export($maquintosh);
echo $maquintosh->getModelo();