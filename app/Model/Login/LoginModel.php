<?php

namespace Model\Login;

require_once __DIR__ . '/UsuarioModel.php';
use Model\Login\UsuarioModel;

require_once __DIR__ .'/AuthUser.php';
use Model\Login\AuthUser;
require_once __DIR__.'/../../DataBase/conexion.php';
use DataBase\Conexion;
use PDOException;


class LoginModel
{
    private $usuario;
    
    public function __construct(){
        
        try {
            $conexion = new Conexion();
        
            $this->usuario = new UsuarioModel($conexion->conectar());
        } catch (PDOException $e) {
            // Manejar el error de conexión
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
    

    /*  private function inicializarUsuarios()
    {
        $this->usuarios = [
            'admin' => UsuarioModel::crearUsuario('admin','Roxana', 'clave1', 'medico'),
            'usuario01' => UsuarioModel::crearUsuario('usuario01','Ilan', 'ilan', 'paciente'),
            'usuario02' => UsuarioModel::crearUsuario('usuario02','Sohell', 'sohell', 'paciente'),
            'usuario03' => UsuarioModel::crearUsuario('usuario03','Joseph', 'joseph', 'paciente'),
            'usuario04' => UsuarioModel::crearUsuario('usuario04','Ronald', 'ronald', 'paciente'),
        ];

    }
 */
    public function verificarCredenciales($usuario, $clave, AuthUser $authUser)
    {
        
        $this->usuario->obtenerUsuarioPorCorreo($usuario);
        
        $autenticado=$authUser->autenticar($usuario, $clave, $this->usuario);
        
        
        return $autenticado;
    }
/* 
    private function obtenerUsuarios()
    {
        return $this->usuarios;
    } */

    public function registrarUsuario($nombre, $usuario, $password, $tipo)
    {
        $this->usuario->setIdUsuario($usuario);
        $this->usuario->setNombre($nombre);
        $this->usuario->setCorreo($usuario);
        $this->usuario->setContra($password);
        $this->usuario->crearUsuario();
    }

    public function getUsuario($correo)
    {
        $this->usuario->obtenerUsuarioPorCorreo($correo);
        return $this->usuario;
    }

    public function usuarioExiste($usuario)
    {
        return $this->usuario->obtenerUsuarioPorCorreo($usuario) != null;
    }
}

?>
