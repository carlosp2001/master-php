<?php
require_once 'models/producto.php';

class productoController
{
    public function index()
    {
//        echo "Controlador Productos, Accion Index";

        // renderizar vista
        require_once 'views/producto/destacados.php';
    }

    public function gestion()
    {
        Utils::isAdmin();

        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/producto/gestion.php';
    }

    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    public function save()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $nombre = $_POST['nombre'] ?? false;
            $descripcion = $_POST['descripcion'] ?? false;
            $precio = $_POST['precio'] ?? false;
            $stock = $_POST['stock'] ?? false;
            $categoria = $_POST['categoria'] ?? false;

            if ($nombre && $descripcion && $precio && $stock && $categoria) {
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoriaId($categoria);
                // Guardar la imagen
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

                    if(!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }
                    $producto->setImagen($filename);
                    move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);
                }

                $save = $producto->save();

                if ($save) {
                    $_SESSION['producto'] = 'complete';
                } else {
                    $_SESSION['producto'] = 'failed';
                }
            } else {
                $_SESSION['producto'] = 'failed';
            }
        } else {
            $_SESSION['producto'] = 'failed';
        }

        header('Location:' . base_url . 'producto/gestion');
    }

}
