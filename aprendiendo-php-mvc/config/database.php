<?php

class database {
    public static function conectar() {
        $conexion = new mysqli('127.0.0.1', 'carlosp2001', '1C@rlitos', 'notas_master');
        $conexion->query("SET NAMES 'utf-8'");

        return $conexion;
    }
}
