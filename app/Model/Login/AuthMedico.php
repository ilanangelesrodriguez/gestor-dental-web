<?php

namespace Model\Login;

use Exception;

class AuthMedico implements AuthUser {
    public function autenticar($username, $password, $usuarios) {
        try {
            if (isset($usuarios[$username])) {
                $usuario = $usuarios[$username];
                if ($usuario->getusername() == $username && $password==$usuario->getClave()) {
                                        
                    return true;
                }

            }
            throw new Exception("Credenciales inválidas");
        } catch (Exception $e) {
            // Captura el error y realiza alguna acción, como registrar o mostrar un mensaje de error.
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}

