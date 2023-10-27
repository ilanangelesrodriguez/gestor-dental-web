<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body>

<div class="div__login">
    <div class="login" id="login">

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

        // Llama al método para mostrar el formulario de inicio de sesión
        $loginController->mostrarFormulario();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'], $_POST['user_type'])) {
            // Llama al método para procesar el formulario de inicio de sesión
            $loginController->procesarFormulario();
        }

        ?>
    </div>
</div>

</body>
</html>
