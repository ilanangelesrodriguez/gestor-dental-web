<?php

namespace Controller;
require_once __DIR__."/../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();


require_once __DIR__.'/../Model/Login/UsuarioModel.php';

require_once __DIR__.'/../Model/Login/LoginModel.php';

require_once __DIR__.'/../Model/Login/AuthMedico.php';
require_once __DIR__.'/../Model/Login/AuthPaciente.php';

use Model\Login\AuthMedico;
use Model\Login\AuthPaciente;

use Model\Login\LoginModel;

use View\LoginView;
use PDOException;
class LoginController
{
    public function mostrarFormulario()
    {
     
        $loginView = new LoginView();
        
        $loginView->mostrarFormulario();
        
    }

    public function procesarFormulario()
    {
        session_start();
        
        
        if (isset($_POST['email']) && isset($_POST['password'])) {
            
            $usuario = $_POST['email'];
            $clave = $_POST['password'];

            
            
            $loginModel = new LoginModel();
            

            $usuarioExistente = $loginModel->getUsuario($usuario);
            

            if ($loginModel->usuarioExiste($usuario)) {
                if ($usuarioExistente) {
                    // Verifica el tipo de usuario
                    $authStrategy = null;
                    if ( $usuarioExistente->getTipo() === 'medico') {
                        $authStrategy = new AuthMedico();
                    } else if ($usuarioExistente->getTipo() === 'paciente') {
                        $authStrategy = new AuthPaciente();
                    }

                    if ($authStrategy && $loginModel->verificarCredenciales($usuario, $clave, $authStrategy)) {

                        $nombreUsuario = $usuarioExistente->getNombre();
                        $tipoUsuario = $usuarioExistente->getTipo();
                        $_SESSION['user'] = $usuarioExistente->getNombre();
                        $_SESSION['logged'] = true;
                        $_SESSION['tipo'] = $tipoUsuario;



                        // Almacenar los datos en un enlace
                        $enlace = "home.php";
                        

                        echo "<div class='login__message'>";
                        echo "<div class='login__title'>Bienvenido ".$_SESSION['user']."<br><span>Dale click a continuar</span></div>";
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
/* $prueba = new LoginController();
$_POST['email'] = 'roxana.bernal@clinica.com';
$_POST['password'] = 'contramedico';
$prueba->procesarFormulario(); */

?>