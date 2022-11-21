<?php

class Database {
    public static function connect() {
        $db = new mysqli('127.0.0.1', 'carlosp2001', '1C@rlitos', 'tienda_master');
        $db->query("set names 'utf8'");
        return $db;
    }
}
