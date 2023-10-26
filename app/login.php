<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="login">

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

    use Controller\LoginController;
    use Model\Login\LoginModel;
    use View\LoginView;

    require_once '../app/Model/Login/UsuarioModel.php';
    require_once '../app/Model/Login/LoginModel.php';
    require_once '../app/Controller/LoginController.php';
    require_once '../app/View/LoginView.php';


    $loginModel = new LoginModel();
    $loginController = new LoginController();
    $loginView = new LoginView();

    $action = isset($_GET['action']) ? $_GET['action'] : 'mostrarFormulario';

    // Realizar enrutamiento
    if ($action === 'mostrarFormulario') {
        $loginController->mostrarFormulario();
    } elseif ($action === 'procesarFormulario') {
        $loginController->procesarFormulario();
    }

    ?>
</div>

</body>
</html>
