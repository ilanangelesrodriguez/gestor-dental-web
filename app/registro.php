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
<div class="registro">

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

    // Instancia el RegistroController
    $registroController = new \Controller\RegistroController();

    // Comprueba si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Llama a la función para registrar el usuario
        $registroController->registrarUsuario();
    } else {
        // Llama a la función para mostrar el formulario de registro
        $registroController->mostrarFormularioRegistro();
    }


    ?>
</div>
</body>
</html>