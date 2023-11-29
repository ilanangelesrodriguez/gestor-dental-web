<?php

namespace Model\Login;

use Model\Login\AuthUser;
class AuthMedico implements AuthUser {
    public function autenticar($correo, $password,$usuario): bool
    {
/*         echo "Antes de la comprobación";
        echo "<br>";
        var_dump($usuario->getCorreo());
        echo "<br>";
        echo "<br>";
        var_dump($correo);
        echo "<br>";
        echo "<br>";
        var_dump($usuario->getContra());
        echo "<br>";
        echo "<br>";
        var_dump($password);
        echo "<br>";
        echo "<br>";
        var_dump($usuario->getTipo());
        echo "<br>";
        var_dump('medico'); */
        if ($usuario->getCorreo() === $correo && $password== $usuario->getContra() && $usuario->getTipo() === 'medico') {
            
            return true;
        }
        
        return false;
    }

}

?>