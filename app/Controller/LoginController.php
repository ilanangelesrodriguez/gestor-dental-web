<?php

namespace Controller;

use Model\Login\LoginModel;
use View\LoginView;

class LoginController
{
    public function mostrarFormulario()
    {
        $loginView = new LoginView();
        $loginView->mostrarFormulario();
    }

    public function procesarFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['email'];
            $clave = $_POST['password'];

            $loginModel = new LoginModel();
            $usuarioExistente = $loginModel->getUsuario($usuario);

            if ($usuarioExistente && $loginModel->verificarCredenciales($usuarioExistente, $clave)) {
                // Las credenciales son correctas, aquí puedes redirigir al usuario a la página principal
                echo "<div class=login__title>Bienvenido {$usuarioExistente->getNombre()}<br><span>Introduce los datos de prueba para continuar</span></div>";
                echo "<div class='login__response'>Inicio de sesión exitoso</div>";

                echo '<button class="login__button signout__button" onclick="goBack()">Cerrar Sesión</button>';
                exit;
            } else {
                // Las credenciales son incorrectas, muestra un mensaje de error o vuelve a mostrar el formulario
                echo "<div class=login__title>Clave incorrecta<br><span>Introduce los datos de prueba para continuar</span></div>";

                echo '<button class="login__button" onclick="goBack()">← Volver</button>';

                echo "Credenciales incorrectas. Vuelve a intentarlo.";
            }
        }
    }

    public function registrarUsuario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $usuario = $_POST['email'];
            $clave = $_POST['password'];

            $loginModel = new LoginModel();
            if ($loginModel->registrarUsuario($nombre, $usuario, $clave)) {
                header('Location: login.php');
                exit;
            } else {
                // El usuario ya existe, muestra un mensaje de error o vuelve a mostrar el formulario de registro
                echo "El usuario ya existe. Introduce otro nombre de usuario.";
            }
        }
    }
}
