<?php
namespace Model\paciente;
require_once __DIR__."/../../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
require_once("./../Login/UsuarioModel.php");
use Model\Login\UsuarioModel;

class PacienteModel extends UsuarioModel{
    public function __construc($username,$nombre,$clave,$direccion){
        parent::__construct($username,$nombre,$clave,"paciente");
    }
    public static function createPaciente($username,$nombre,$clave,$direccion){
        return new self($username,$nombre,$clave,$direccion);
    }
}



?>