<?php

class Producto
{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     */
    public function setCategoriaId($categoria_id): void
    {
        $this->categoria_id = $categoria_id;
    }

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
    public function setNombre($nombre): void
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $this->db->real_escape_string($precio);
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $this->db->real_escape_string($stock);
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     */
    public function setOferta($oferta): void
    {
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen): void
    {
        $this->imagen = $this->db->real_escape_string($imagen);
    }

    public function getAll()
    {
        $productos = $this->db->query("select * from productos order by id desc ");
        return $productos;
    }

    public function getAllCategory()
    {
        $sql = "select p.*, c.nombre as 'catnombre' from productos p inner join categorias c on c.id = p.categoria_id where p.categoria_id = {$this->getCategoriaId()} order by id desc";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getRandom($limit)
    {
        $productos = $this->db->query("select * from productos order by rand() limit $limit");
        return $productos;

    }

    public function getOne()
    {
        $producto = $this->db->query("select * from productos where id= {$this->getId()}");
        return $producto->fetch_object();
    }

    public function save()
    {
        $sql = "insert into productos values(null,'{$this->getCategoriaId()}', '{$this->getNombre()}', '{$this->getDescripcion()}', '{$this->getPrecio()}','{$this->getStock()}', null, CURDATE(),  '{$this->getImagen()}')";

        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        } else {
            echo $sql;
            echo $this->db->error;
        }
        return $result;
    }

    public function edit()
    {
        $sql = "update productos set categoria_id = '{$this->getCategoriaId()}', nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = '{$this->getPrecio()}', stock = '{$this->getStock()}'";
        if ($this->getImagen() != null) {
            $sql .= ",  imagen = '{$this->getImagen()}'";
        }
        $sql .= " WHERE id={$this->id};";

        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        } else {
            echo $sql;
            echo $this->db->error;
        }
        return $result;
    }

    public function delete()
    {
        $sql = "delete from productos where id={$this->id}";
        $delete = $this->db->query($sql);
        $result = false;
        if ($delete) {
            $result = true;
        } else {
            echo $sql;
            echo $this->db->error;
        }
        return $result;
    }
}