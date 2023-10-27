<?php

namespace Model\Login;


class UsuarioModel
{
    private $username;
    private $nombre;
    private $clave;
    private $tipo;

    public function __construct($username,$nombre, $clave, $tipo)
    {
        $this->username=$username;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->tipo = $tipo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getusername()
    {
        return $this->username;
    }
    public function getClave()
    {
        return $this->clave;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public static function crearUsuario($username,$nombre, $clave, $tipo)
    {
        return new self($username,$nombre, $clave, $tipo);
    }

}
