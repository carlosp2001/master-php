<?php

class Categoria
{
    private $id;
    private $nombre;
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

    public function getAll () {
        $categorias = $this->db->query(
            "select * from categorias order by id desc;");
        return $categorias;
    }

    public function getOne()
    {
        $categoria = $this->db->query(
            "select * from categorias where id={$this->getId()};");
        return $categoria->fetch_object();
    }

    public function save() {
        $sql = "insert into categorias values(null, '{$this->getNombre()}');";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        } else {
            echo $this->db->error;
        }
        return $result;
    }

}
