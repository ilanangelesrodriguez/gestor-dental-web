<?php

namespace Model\Login;

interface AuthUser {
    public function autenticar($username, $password, $usuarios);
}
