<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController
{
    public function index()
    {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categoria/index.php';
    }

    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save()
    {
        Utils::isAdmin();

        if (isset($_POST) && isset($_POST['nombre'])) {
            // Guardar categoria en bd
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }
        header('Location:' . base_url . "categoria/index");
    }

    public function ver()
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            // Conseguir categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
//            var_dump($categoria);

            // Conseguir productos
            $producto = new Producto();
            $producto->setCategoriaId($id);
            $productos = $producto->getAllCategory();

        }

        require_once 'views/categoria/ver.php';
    }
}
