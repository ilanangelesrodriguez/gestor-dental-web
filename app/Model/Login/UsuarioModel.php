<?php

namespace Model\Login;


class UsuarioModel
{
    private $nombre;
    private $clave;

    public function __construct($nombre, $clave)
    {
        $this->nombre = $nombre;
        $this->clave = password_hash($clave, PASSWORD_DEFAULT);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public static function crearUsuario($nombre, $clave)
    {
        return new self($nombre, $clave);
    }

}