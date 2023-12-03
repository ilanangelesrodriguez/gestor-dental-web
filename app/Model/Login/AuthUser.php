<?php

namespace Model\Login;
require_once __DIR__."/../../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
use Model\Login\UsuarioModel;
interface AuthUser {
    public function autenticar($correo, $password, UsuarioModel $usuario): bool;
}
?>