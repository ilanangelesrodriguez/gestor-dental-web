<?php
namespace Model\paciente;
require("/app/Model/Login/UsuarioModel.php");

class PacienteModel extends UsuarioModel{
    public function __construc($username,$nombre,$clave){
        parent::__construct($username,$nombre,$clave,"paciente");
    }
    public static function createPaciente($username,$nombre,$clave){
        return new self($username,$nombre,$clave);
    }
}



?>