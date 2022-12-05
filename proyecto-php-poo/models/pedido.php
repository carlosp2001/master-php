<?php

class Pedido
{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;

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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia($provincia): void
    {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     */
    public function setLocalidad($localidad): void
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $this->db->real_escape_string($direccion);;
    }

    /**
     * @return mixed
     */
    public function getCoste()
    {
        return $this->coste;
    }

    /**
     * @param mixed $coste
     */
    public function setCoste($coste): void
    {
        $this->coste = $coste;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
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
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora): void
    {
        $this->hora = $hora;
    }


    public function getAll()
    {
        $productos = $this->db->query("select * from pedidos order by id desc ");
        return $productos;
    }

    public function getOne()
    {
        $producto = $this->db->query("select * from pedidos where id= {$this->getId()}");
        return $producto->fetch_object();
    }

    public function getOneByUser()
    {
        $sql = "select p.id, p.coste from tienda_master.pedidos p inner join tienda_master.lineas_pedidos lp 
         on lp.pedido_id = p.id where p.usuario_id= {$this->getUsuarioId()} order by id desc limit 1";
        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }

    public function getAllByUser()
    {
        $sql = "select p.* from tienda_master.pedidos p 
where p.usuario_id = {$this->getUsuarioId()} order by id desc ";
        $pedido = $this->db->query($sql);
        return $pedido;
    }

    public function getProductosByPedido($id)
    {
//        $sql = "select * from tienda_master.productos where id in (select producto_id from tienda_master.lineas_pedidos where pedido_id = {$id})";
        $sql = "select pr.*, lp.unidades from tienda_master.productos pr
inner join tienda_master.lineas_pedidos lp on pr.id = lp.producto_id
where lp.pedido_id={$id}";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function save()
    {
        $sql = "insert into pedidos values(null,'{$this->getUsuarioId()}', '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}',{$this->getCoste()}, 'confirm', CURDATE(), CURTIME());";

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

    public function save_linea()
    {
        $sql = "select last_insert_id() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        foreach ($_SESSION['carrito'] as $elemento) {
            $producto = $elemento['producto'];
            $insert = "insert into lineas_pedidos values (null, {$pedido_id}, {$elemento['unidades']}, {$producto->id})";
            $save = $this->db->query($insert);
        }

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function edit()
    {

        $sql = "update tienda_master.pedidos set estado = '{$this->getEstado()}'";

        $sql .= " WHERE id={$this->getId()};";

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

}
