<?php

namespace Model\Login;

class AuthPaciente implements AuthUser {
    public function autenticar($username, $password, $usuarios) {
        if ($usuario = $usuarios[$username]) {
            return $usuario->getusername() === $username && $password== $usuario->getClave();
        }
        return false;
    }
}