<?php
namespace Model\cita;

class cita {
    public $fecha_cita;
    public $hora_cita;
    public $paciente_atend;
    public $medico_encarg;
    public $diagnostico;
    public $estado;
    public $fecha_prox;
    public $comentario;

    public function __construct($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, $fecha_prox, $comentario) {
        $this->fecha_cita = $fecha_cita;
        $this->hora_cita = $hora_cita;
        $this->paciente_atend = $paciente_atend;
        $this->medico_encarg = $medico_encarg;
        $this->diagnostico = $diagnostico;
        $this->estado = $estado;
        $this->fecha_prox = $fecha_prox;
        $this->comentario = $comentario;
    }

    public function getFechaCita() {
        return $this->fecha_cita;
    }

    public function getHoraCita() {
        return $this->hora_cita;
    }

    public function getPacienteAtend() {
        return $this->paciente_atend;
    }

    public function getMedicoEncarg() {
        return $this->medico_encarg;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getFechaProx() {
        return $this->fecha_prox;
    }

    public function getComentario() {
        return $this->comentario;
    }
    public function setmedico_encarg($medico_encarg){
        $this->medico_encarg = $medico_encarg;
    }
    public function set_estado($estado){
        $this->estado = $estado; # configurar para setear estados predefinidos
    }
    public function create_cita($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, $fecha_prox, $comentario) {
        return new self($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, $fecha_prox, $comentario);
    }
}
?>