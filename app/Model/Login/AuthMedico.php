<?php

namespace Model\Login;

class AuthMedico implements AuthUser {
    public function autenticar($username, $password, $usuarios): bool
    {
        if (isset($usuarios[$username]) && $usuarios[$username]->getusername() == $username && $password == $usuarios[$username]->getClave() && $usuarios[$username]->getTipo() === 'medico') {
            return true;
        }
        return false;
    }

}

