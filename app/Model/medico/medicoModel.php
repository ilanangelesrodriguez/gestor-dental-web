<?php
namespace Model\medico;
require("/app/Model/Login/UsuarioModel.php");


class MedicoModel extends UsuarioModel{

    protected $especialidad;
    protected $foto;

    public function __construct($username,$nombre, $clave, $especialidad,$disponibilidad,$foto) {
        parent::__construct($username,$nombre, $clave, "medico");
        $this->especialidad = $especialidad;
        $this->foto = $foto;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }
    public function getDisponibilidad() {
        return $this->disponibilidad;
    }
    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }
    public function addEspecialidad($especialidad) {
        array_push($this->especialidad, $especialidad);
    }
    public function getFoto() {
        return $this->foto;
    }
    public static function createMedico($username,$nombre, $clave, $especialidad,$disponibilidad,$foto) {
        return new self($username,$nombre, $clave, $especialidad,$disponibilidad,$foto);
    }
}
