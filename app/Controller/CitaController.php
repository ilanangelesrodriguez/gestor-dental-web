<?php
namespace Controller;
require_once __DIR__.'/../../public/Handler.php';
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();

require_once __DIR__.'/../Model/cita/CitaModel.php';
require_once __DIR__.'/../View/CitaView.php';
use Model\cita\CitaModel;
use View\CitaView;


class CitaController
{
    public function mostrarFormularioCita()
    {
        $citaView = new CitaView();
        $citaView->mostrarFormularioCita();
    }

    public function procesarCita()
    {

        $fechaCita = $_POST['fecha_cita'];
        $horaCita = $_POST['hora_cita'];
        $pacienteAtend = $_POST['paciente_atend']; 
        $medicoEncarg = $_POST['medico_encarg'];
        $diagnostico = $_POST['diagnostico'];
        $estado = $_POST['estado'];
        $comentario = $_POST['comentario'];

        $citaModel = new CitaModel();

        $result = $citaModel->createCita($fechaCita, $horaCita, $pacienteAtend, $medicoEncarg, $diagnostico, $estado, $comentario);

        if ($result) {
            echo "Cita creada con éxito";
         } else {
            echo "Error al crear la cita";
        }

    }
}