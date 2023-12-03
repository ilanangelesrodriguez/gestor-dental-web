<?php
namespace Model\Login;
require_once __DIR__."/../../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
use Model\Login\AuthUser;


class AuthPaciente implements AuthUser {
    public function autenticar($correo, $password,$usuario): bool
    {
        /* echo "Antes de la comprobación";
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
        var_dump('paciente'); */
        if ($usuario->getCorreo() === $correo && $password== $usuario->getContra() && $usuario->getTipo() === 'paciente') {
            
            return true;
        }
            
        return false;
    }
}?>