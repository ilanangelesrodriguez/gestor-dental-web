<?php

namespace Model\Login;

require_once 'UsuarioModel.php';

class LoginModel
{
    private $usuarios;

    public function __construct()
    {
        $this->inicializarUsuarios();
    }

    private function inicializarUsuarios()
    {

        $this->usuarios['admin'] = UsuarioModel::crearUsuario('Roxana', 'clave1');
        $this->usuarios['usuario01'] = UsuarioModel::crearUsuario('Ilan', 'ilan');
        $this->usuarios['usuario02'] = UsuarioModel::crearUsuario('Sohell', 'sohell');
        $this->usuarios['usuario03'] = UsuarioModel::crearUsuario('Joseph', 'joseph');
        $this->usuarios['usuario04'] = UsuarioModel::crearUsuario('Ronald', 'ronald');

    }

    public function verificarCredenciales($usuario, $clave)
    {

        return $usuario->getNombre() === $usuario->getNombre() && password_verify($clave, $usuario->getClave());

    }

    public function registrarUsuario($nombre, $usuario, $password)
    {
        if ($this->usuarioExiste($usuario)) {
            return false;
        }

        $this->usuarios[$usuario] = UsuarioModel::crearUsuario($nombre, $password);
        return true;
    }

    public function usuarioExiste($usuario)
    {
        return isset($this->usuarios[$usuario]);
    }

    public function getUsuario($nombre)
    {
        return isset($this->usuarios[$nombre]) ? $this->usuarios[$nombre] : null;
    }

}
