<?php 
require_once './Handler.php';
use Handler\Handler;
$handler=new Handler();
$handler->returnIndex();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Programar Cita</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">
    <link rel="stylesheet" href="css/cita.css">
</head>
<body>
    <div class="cita div__cita">
        <div class="cita__div">
            <?php
            

            require_once './../app/Controller/CitaController.php';
            use Controller\CitaController;

            $citaController = new CitaController();

            if ($_POST) {
                $citaController->procesarCita();
            } else {
                $citaController->mostrarFormularioCita();
            }
            ?>
        </div>
    </div>
        <div class="loader">
        <div class="loader__figure custom-loader"></div>
    </div>
    
</body>
</html>
