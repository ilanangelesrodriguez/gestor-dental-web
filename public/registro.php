<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Registro</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="registro div__login">

    <div class="login" id="login">
        <div class="login__image">
            <?php
            $base_path = __DIR__;
            include dirname($base_path) . '/media/register.svg';
            ?>
        </div>
        <div class="login__div">
            <?php
            /**
             * Sección de registro
             *
             * Este archivo actúa como el punto de entrada para la funcionalidad de inicio de sesión.
             * Incluye la inicialización de modelos, controladores y vistas necesarios, y realiza el enrutamiento
             * según la acción especificada en la URL.
             *
             * @author Ilan Nestor Angeles Rodriguez
             */
            session_start();
            use Controller\RegistroController;
            use Model\Login\LoginModel;
            use View\RegistroView;

            require_once '../app/Model/Login/UsuarioModel.php';
            require_once '../app/Model/Login/LoginModel.php';
            require_once '../app/Controller/RegistroController.php';
            require_once '../app/View/RegistroView.php';


            $loginModel = new LoginModel();
            $registroController = new RegistroController();
            $registroView = new RegistroView();

            $registroController = new \Controller\RegistroController();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $registroController->registrarUsuario();
            } else {
                $registroController->mostrarFormularioRegistro();
            }


            ?>
            <a href="login.php" class="login__image-a">¿Ya tienes una cuenta?</a>

        </div>


    </div>


</div>
<div class="loader">
    <div class="loader__figure custom-loader"></div>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        setTimeout(function() {
            document.querySelector(".loader").style.display = "none";
        }, 2000);

    });
    function volver() {
        window.history.back();
    }

    function mostrarSiguiente() {
        let primerGrupo = document.getElementsByClassName("primer-grupo");
        let segundoGrupo = document.getElementsByClassName("segundo-grupo");
        let botonEnviar = document.getElementById("boton-enviar");
        var botonAnterior = document.getElementById("boton-anterior");

        for (let i = 0; i < primerGrupo.length; i++) {
            primerGrupo[i].style.display = "none";
        }

        for (let i = 0; i < segundoGrupo.length; i++) {
            segundoGrupo[i].style.display = "flex";
        }

        botonEnviar.style.display = "inline-block";
        document.getElementById("boton-next").style.display="none";
        botonAnterior.style.display = "inline-block";

    }

    function mostrarAnterior() {
        let primerGrupo = document.getElementsByClassName("primer-grupo");
        let segundoGrupo = document.getElementsByClassName("segundo-grupo");
        let botonEnviar = document.getElementById("boton-enviar");
        let botonAnterior = document.getElementById("boton-anterior");

        for (let i = 0; i < primerGrupo.length; i++) {
            primerGrupo[i].style.display = "flex";
        }

        for (let i = 0; i < segundoGrupo.length; i++) {
            segundoGrupo[i].style.display = "none";
            document.getElementById("boton-next").style.display="inline-block";
        }

        botonEnviar.style.display = "none";
        botonAnterior.style.display = "none";
    }
</script>
</html>