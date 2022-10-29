<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
<h1>Formulario</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre: </label>
    <p><input type="text" name="nombre" autofocus maxlength="8" pattern="[A-Z ]+" required="required"></p>

    <label for="apellido">Apellido</label>
    <p><input type="text" name="apellido" placeholder="Ingresa tu apellido" disabled></p>

    <!--    Boton-->
    <label for="boton">Boton:</label>
    <p><input type="button" name="boton" value="Clickable"></p>

    <!--    Checkbox-->
    <label for="sexo">Sexo:</label>
    <p>
        Hombre <input type="checkbox" name="sexo" value="hombre" checked="checked">
        Mujer <input type="checkbox" name="sexo" value="mujer">
    </p>

    <!--    Color-->
    <label for="boton">Color:</label>
    <p><input type="color" name="color"></p>

    <!--    Date-->
    <label for="fecha">Fecha:</label>
    <p><input type="date" name="fecha"></p>

    <!--    Correo-->
    <label for="correo">Email:</label>
    <p><input type="email" name="correo"></p>

    <!--    Archivo-->
    <label for="archivo">Archivo:</label>
    <p><input type="file" name="archivo" multiple="multiple"></p>

    <!--    Numero-->
    <label for="numero">Numero:</label>
    <p><input type="number" name="numero"></p>

    <!--    Password-->
    <label for="pass">Contraseña:</label>
    <p><input type="password" name="pass"></p>

    <!--    Radio button-->
    <label for="continente">Continente:</label>
    <p>
        America del Sur: <input type="radio" name="continente" value="America del Sur">
        Europa: <input type="radio" name="continente" value="Europa">
        Asia: <input type="radio" name="continente" value="Asia">
    </p>

    <!--    Web-->
    <label for="web">Pagina web:</label>

    <textarea name="" id="" cols="30" rows="10"></textarea>

    Peliculas:
    <select name="peliculas" id="">
        <option value="spiderman">Spiderman</option>
        <option value="batman">Batman</option>
        <option value="lajungladecristal">La jungla de cristal</option>
        <option value="grantorino">Gran Torino</option>
    </select>
    <p><input type="url" name="web"></p>

    <input type="submit" value="Enviar">

</form>
</body>
</html>

