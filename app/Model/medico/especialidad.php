<?php
namespace Model\medico;

class Especialidad {
    private $id;
    private $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public static function createEspecialidad($id, $nombre) {
        return new self($id, $nombre);
    }
}




?>