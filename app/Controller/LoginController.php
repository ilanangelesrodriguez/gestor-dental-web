<?php

namespace Controller;

use Model\Login\AuthMedico;
use Model\Login\AuthPaciente;
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
        if ($_POST) {
            $usuario = $_POST['email'];
            $clave = $_POST['password'];
            $user_type = $_POST['user_type'];

            $loginModel = new LoginModel();
            if ($user_type === 'medico') {
                $authStrategy = new AuthMedico();
            } else {
                $authStrategy = new AuthPaciente();
            }
            $usuarioExistente = $loginModel->getUsuario($usuario);

            if($loginModel->usuarioExiste($usuario)){
                if ($usuarioExistente && $loginModel->verificarCredenciales($usuario, $clave, $authStrategy)) {
                    echo "<div class='login__message'>";
                    echo "<div class=login__title>Bienvenido {$usuarioExistente->getNombre()}<br><span>Dale click a continuar</span></div>";

                    echo '<button class="login__button signout__button">Continuar</button>';
                    echo '<button style="margin-top: 1em" class="login__button" onclick="volver()">← Volver</button>';

                    echo "</div>";

                }else{

                    echo "<div class=login__title-error>Clave incorrecta<br><span>Introduce los datos de prueba para continuar</span></div>";

                    echo '<button class="login__button" onclick="volver()">← Volver</button>';

                }
            } else {
                echo "<div class=login__title-exit>El usuario no existe<br><span>Por favor, elige el nombre de usuario correcto.</span></div>";
                echo "<p class='login__p'>Introduce un nombre de usuario existente.</p>";
                echo '<button style="margin:0;" class="login__button signout__button" onclick="volver()">Regresar</button>';
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
            $user_type = $_POST['user_type'];

            // Verifica el tipo de usuario y crea la estrategia correspondiente
            $authStrategy = $user_type === 'medico' ? new AuthMedico() : new AuthPaciente();

            if ($loginModel->registrarUsuario($nombre, $usuario, $clave, $user_type)) {
                header('Location: login.php');
                exit;
            } else {
                // El usuario ya existe, muestra un mensaje de error o vuelve a mostrar el formulario de registro
                echo "El usuario ya existe. Introduce otro nombre de usuario.";
            }


        }
    }
}
