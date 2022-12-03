<?php

require_once 'models/pedido.php';

class pedidoController
{
    public function hacer()
    {
        require_once 'views/pedido/hacer.php';
    }

    public function add()
    {
        if (isset($_SESSION['identity'])) {
            $usuario_id = $_SESSION['identity']->id;
//            var_dump($usuario_id);
            $provincia = $_POST['provincia'] ?? false;
            $localidad = $_POST['localidad'] ?? false;
            $direccion = $_POST['direccion'] ?? false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];

            if ($provincia && $localidad && $direccion) {
                // Guardar datos en bd
                $pedido = new Pedido();
                $pedido->setUsuarioId($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);

                $save = $pedido->save();

                // Guardar linea pedido
                $save_linea = $pedido->save_linea();


                if ($save && $save_linea) {
                    $_SESSION['pedido'] = "complete";
                } else {
                    $_SESSION['pedido'] = 'failed';
                }
//                var_export($pedido);
            } else {
                $_SESSION['pedido'] = 'failed';
            }

            header('Location:' . base_url . 'pedido/confirmado');

        } else {
            // Redirigir al index
            header('Location:' . base_url);
        }
    }

    public function confirmado()
    {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuarioId($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }
}
