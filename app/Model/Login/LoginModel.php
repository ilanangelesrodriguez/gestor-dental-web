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
        $this->usuarios = [
            'admin' => UsuarioModel::crearUsuario('admin','Roxana', 'clave1', 'medico'),
            'usuario01' => UsuarioModel::crearUsuario('usuario01','Ilan', 'ilan', 'paciente'),
            'usuario02' => UsuarioModel::crearUsuario('usuario02','Sohell', 'sohell', 'paciente'),
            'usuario03' => UsuarioModel::crearUsuario('usuario03','Joseph', 'joseph', 'paciente'),
            'usuario04' => UsuarioModel::crearUsuario('usuario04','Ronald', 'ronald', 'paciente'),
        ];

    }

    public function verificarCredenciales($usuario, $clave, AuthUser $authUser)
    {

        $usuarios = $this->obtenerUsuarios();

        return $authUser->autenticar($usuario, $clave, $usuarios);

    }

    private function obtenerUsuarios()
    {
        return $this->usuarios;
    }

    public function registrarUsuario($nombre, $usuario, $password, $tipo)
    {
        if ($this->usuarioExiste($usuario)) {
            return false;
        }

        $this->usuarios[$usuario] = UsuarioModel::crearUsuario($usuario,$nombre, $password, $tipo);
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
