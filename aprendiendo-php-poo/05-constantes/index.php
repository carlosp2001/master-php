<?php

class Usuario {
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}

//
//$usuario = new Usuario();
//// Acceder a constantes
//echo $usuario::URL_COMPLETA . "<br>";
//
//// A nivel de clase
//echo Usuario::URL_COMPLETA . "<br>";
//var_dump($usuario);