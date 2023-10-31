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

            $usuarioExistente = $loginModel->getUsuario($usuario);


            if ($loginModel->usuarioExiste($usuario)) {
                if ($usuarioExistente) {
                    // Verifica el tipo de usuario
                    $authStrategy = null;
                    if ($user_type === 'medico' && $usuarioExistente->getTipo() === 'medico') {
                        $authStrategy = new AuthMedico();
                    } else if ($user_type === 'paciente' && $usuarioExistente->getTipo() === 'paciente') {
                        $authStrategy = new AuthPaciente();
                    }

                    if ($authStrategy && $loginModel->verificarCredenciales($usuario, $clave, $authStrategy)) {

                        $nombreUsuario = $usuarioExistente->getNombre();
                        $tipoUsuario = $usuarioExistente->getTipo();

                        // Almacenar los datos en un enlace
                        $enlace = "home.php?nombre=" . urlencode($nombreUsuario) . "&tipo=" . urlencode($tipoUsuario);

                        echo "<div class='login__message'>";
                        echo "<div class='login__title'>Bienvenido {$usuarioExistente->getNombre()}<br><span>Dale click a continuar</span></div>";
                        echo '<a href="'.$enlace.'"> <button class="login__button signout__button">Continuar</button> </a>';
                        echo '<button style="margin-top: 1em" class="login__button" onclick="volver()">← Volver</button>';
                        echo "</div>";



                    } else {
                        echo "<div class='login__title-error'>Clave o tipo de usuario incorrecto<br><span>Introduce los datos de prueba para continuar</span></div>";
                        echo '<button class="login__button" onclick="volver()">← Volver</button>';
                    }
                } else {
                    echo "<div class='login__title-error'>Usuario no encontrado<br><span>Por favor, elige un nombre de usuario correcto.</span></div>";
                    echo "<p class='login__p'>Introduce un nombre de usuario existente.</p>";
                    echo '<button style="margin:0;" class="login__button signout__button" onclick="volver()">Regresar</button>';
                }
            } else {
                echo "<div class='login__title-error'>Usuario no existe<br><span>Por favor, elige un nombre de usuario correcto.</span></div>";
                echo "<p class='login__p'>Introduce un nombre de usuario existente.</p>";
                echo '<button style="margin:0;" class="login__button signout__button" onclick="volver()">Regresar</button>';
        }

        }
    }
}
