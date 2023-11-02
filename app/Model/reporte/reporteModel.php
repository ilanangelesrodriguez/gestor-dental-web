<?php
namespace Model\reporte;

class reporte {
    protected $cita;
    protected $fecha;
    protected $costo;
    protected $tratamiento;
    
    public function __construct($cita, $fecha, $costo, $tratamiento) {
        $this->cita = $cita;
        $this->fecha = $fecha;
        $this->costo = $costo;
        $this->tratamiento = $tratamiento;
    }
    
    public function getCita() {
        return $this->cita;
    }
    
    public function getFecha() {
        return $this->fecha;
    }
    
    public function getCosto() {
        return $this->costo;
    }
    
    public function getTratamiento() {
        return $this->tratamiento;
    }
    
    public function setCosto($costo) {
        $this->costo = $costo;
    }
    
    public function setTratamiento($tratamiento) {
        $this->tratamiento = $tratamiento;
    }
    public function create_reporte($cita, $fecha, $costo, $tratamiento){
        return new self($cita, $fecha, $costo, $tratamiento);
    }
}



?>