<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Login</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body>

<div class="div__login">
    <div class="login" id="login">
        <div class="login__image">
            <?php
            $base_path = __DIR__;
            include dirname($base_path) . '/media/login.svg';
            ?>
            <a href="./registro.php" class="login__image-a">¿No estas registrado?</a>
        </div>
        <div class="login__div">
            <?php
            /**
             * Sección de inicio de sesión
             *
             * Este archivo actúa como el punto de entrada para la funcionalidad de inicio de sesión.
             * Incluye la inicialización de modelos, controladores y vistas necesarios, y realiza el enrutamiento
             * según la acción especificada en la URL.
             *
             * @author Ilan Nestor Angeles Rodriguez
             */

            use View\LoginView;

            require_once '../app/Model/Login/UsuarioModel.php';
            require_once '../app/Model/Login/LoginModel.php';
            require_once '../app/Controller/LoginController.php';
            require_once '../app/View/LoginView.php';
            require_once '../app/Model/Login/AuthUser.php';
            require_once '../app/Model/Login/AuthMedico.php';
            require_once '../app/Model/Login/AuthPaciente.php';

            use Controller\LoginController;

            $loginController = new LoginController();

            if ($_POST) {
                $loginController->procesarFormulario();
            }else {
                $loginController->mostrarFormulario();
            }

            ?>
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
</script>

</html>
