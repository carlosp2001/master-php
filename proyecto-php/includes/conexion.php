<?php
// Conexion
$db = mysqli_connect('127.0.0.1', 'carlosp2001', '1C@rlitos', 'blog_master');

mysqli_query($db, "set names 'utf8'");

// Iniciar la sesión
session_start();
