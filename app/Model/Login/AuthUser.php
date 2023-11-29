<?php

namespace Model\Login;

use Model\Login\UsuarioModel;
interface AuthUser {
    public function autenticar($correo, $password, UsuarioModel $usuario): bool;
}
?>