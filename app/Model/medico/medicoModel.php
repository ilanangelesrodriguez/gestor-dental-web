<?php
namespace Model\medico;
require("/app/Model/Login/UsuarioModel.php");


class MedicoModel extends UsuarioModel{

    protected $especialidad;

    public function __construct($username,$nombre, $clave, $especialidad,$disponibilidad) {
        parent::__construct($username,$nombre, $clave, "medico");
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }
    public function getDisponibilidad() {
        return $this->disponibilidad;
    }
    public static function createMedico($username,$nombre, $clave, $especialidad,$disponibilidad) {
        return new self($username,$nombre, $clave, $especialidad,$disponibilidad);
    }


}

?>
