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
                echo "<div class=login__title-error>Las contraseñas no coinciden<br><span>Por favor, introduce correctamente tus datos.</span></div>";
                echo "<p class='login__p'>Las contraseñas no coinciden. Inténtalo de nuevo.</p>";
                echo '<button style="margin:0;" class="login__button signout__button" onclick="volver()">Regresar</button>';

            } elseif ($loginModel->usuarioExiste($usuario)) {
                echo "<div class=login__title-exit>El usuario ya esta en uso<br><span>Por favor, elige un nombre de usuario diferente.</span></div>";
                echo "<p class='login__p'>Introduce otro nombre de usuario.</p>";
                echo '<button style="margin:0;" class="login__button signout__button" onclick="volver()">Regresar</button>';

            } else {
                $loginModel->registrarUsuario($nombre, $apellidos, $usuario, $correo, $clave);
                echo "<div class=login__title-ok>El usuario ha sido creado<br><span>Por favor, elige un nombre de usuario diferente.</span></div>";
                echo "<p class='login__p'>Registro exitoso. Ahora puedes iniciar sesión.</p>";
                echo '<button style="margin:0;" class="login__button signout__button">Continuar</button>';
            }
        }
    }
}

?>