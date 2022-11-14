<?php

require '../vendor/autoload.php';

$foto_original = 'mifoto2.jpg';
$guardar_en = 'fotomodificada1.png';

$thumb = new PHPThumb\GD($foto_original);

// Limpiar buffer de salida
ob_clean();

// Redimensionar
$thumb->resize(150, 150);

// Recortar
//$thumb->crop(50, 50, 120, 120);

// Recortar desde el centro
$thumb->cropFromCenter(150, 80);
$thumb->show();
$thumb->save($guardar_en, 'png');
