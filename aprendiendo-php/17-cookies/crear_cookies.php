<?php
/*
 * Cookie: Fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar
 * datos o rastrear el comportamiento del mismo en la web.
 */

// Crear una cookie
// setcookie("nombre", "valor que solo puede ser texto", cantidad, ruta, dominio);

// Cookie básica
setcookie("micookie", "valor de mi galleta");

// Cookie con expiración
setcookie("unyear", "valor de mi cookie de 365 dias", time() + (60 * 60 * 24 * 365));
echo time();

header('Location: ver_cookies.php');

