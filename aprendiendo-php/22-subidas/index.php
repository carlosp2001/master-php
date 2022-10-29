<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos</title>
</head>
<body>
<h1>Subir archivos con PHP</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <input type="submit" value="Enviar">

</form>
<h1>Listado de Imágenes</h1>
<?php
$gestor = opendir('./images');
$leerDir = readdir($gestor);
if ($gestor) {
    while (($image = readdir($gestor)) !== false) {
        if ($image != ".." && $image != ".") {
            echo "<img src='images/$image' width='200px'><br>";
        }

    }
}

//while ($leerDir) {
//    $leerDir =readdir($gestor);
//    echo $leerDir;
//}
?>
</body>
</html>
<?php
