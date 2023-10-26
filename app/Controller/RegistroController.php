<?php

namespace Controller;

use Model\Login\LoginModel;
use View\RegistroView;

class RegistroController
{
    public function mostrarFormularioRegistro()
    {
        $registroView = new RegistroView();
        $registroView->mostrarFormularioRegistro();
    }

    public function registrarUsuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $clave = $_POST['password'];
            $confirmarClave = $_POST['confirm_password'];

            $loginModel = new LoginModel();

            if ($confirmarClave !== $clave) {
                echo "Las contraseñas no coinciden. Inténtalo de nuevo.";
            } elseif ($loginModel->usuarioExiste($usuario)) {
                echo "El usuario ya existe. Introduce otro nombre de usuario.";
            } else {
                // Registro exitoso
                $loginModel->registrarUsuario($nombre, $apellidos, $usuario, $correo, $clave);
                echo "Registro exitoso. Ahora puedes iniciar sesión.";
            }
        }
    }
}

