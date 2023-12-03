
<?php
require_once __DIR__."/../../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
require('/../public/fpdf/fpdf.php');

if ($_POST) {
    $medico = $_POST["medico"];
    $paciente = $_POST["paciente"];
    $motivo = $_POST["motivo"];
    $tratamiento = $_POST["tratamiento"];
    $fecha_consulta = $_POST["fecha_consulta"];
    $diagnostico = $_POST["diagnostico"];

}
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Informe Medico', 0, 1, 'C');
    }

    // Pie de página
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }

    // Contenido del informe
    function InformeMedico($informacion) {
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $informacion);
    }
}

$pdf = new PDF();
$pdf->AddPage();

$informacion_medica = utf8_decode("Nombre del Médico: Dr. $medico\n");
$informacion_medica .= utf8_decode("Nombre del Paciente: $paciente\n");
$informacion_medica .= utf8_decode("Motivo de Consulta: $motivo\n");
$informacion_medica .= utf8_decode("Tratamiento Recomendado: $tratamiento\n");
$informacion_medica .= utf8_decode("Fecha de Consulta: " . $fecha_consulta . "\n");
$informacion_medica .= utf8_decode("Diagnóstico: $diagnostico");

$pdf->InformeMedico($informacion_medica);

$pdf->Output();
?>
