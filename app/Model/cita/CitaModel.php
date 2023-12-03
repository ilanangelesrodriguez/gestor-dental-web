<?php
namespace Model\cita;
require_once __DIR__."/../../../public/Handler.php";
require_once __DIR__."/../../DataBase/conexion.php";
require_once __DIR__."/../Login/UsuarioModel.php";
use Database\Conexion;
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
use Model\Login\UsuarioModel;
use PDO;

class CitaModel
{
    public $id_cita;
    public $fecha_cita;
    public $hora_cita;
    public $paciente_atend;
    public $medico_encarg;
    public $fecha_prox;
    public $diagnostico;
    public $estado;
    public $comentario;
    public $pdo;

    public function __construct()
    {

        $this->pdo = (new Conexion())->conectar();
        
    }
    public function setIdCita(){
        $totalCitas = $this->getTotalCitas();
        $numero = $totalCitas + 1;
        $string = str_pad($numero, 3, '0', STR_PAD_LEFT);
        $this->id_cita = "C".$string;

    }
    public function setFechaProx($fecha_prox)
    {
        $this->fecha_prox = $fecha_prox;
    }
    public function getFechaProx()
    {
        return $this->fecha_prox;
    }


    public function getIdCita(){
        return $this->id_cita;
    }
    public function getTotalCitas(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM cita");
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    public function setPaciente($paciente_atend)
    {
        $this->paciente_atend = $paciente_atend;
    }

    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }
    
    public function getFechaCita()
    {
        return $this->fecha_cita;
    }

    public function getHoraCita()
    {
        return $this->hora_cita;
    }

    public function getPacienteAtend()
    {
        return $this->paciente_atend->getIdUsuario();
    }

    public function getMedicoEncarg()
    {
        return $this->medico_encarg->getIdUsuario();
    }

    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    public function getEstado()
    {
        return $this->estado;
    }


    public function getComentario()
    {
        return $this->comentario;
    }

    public function setMedico($medico_encarg)
    {
        $this->medico_encarg = $medico_encarg;
    }

    public function setEstado($estado)
    {
        $estadosValidos = ["A", "C", "P"];
        if (in_array($estado, $estadosValidos)) {
            $this->estado = $estado;
            return true;
        } else {
            return false;
        }
    }
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }

    public function isDiaDisponible($fecha)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM cita WHERE fecha_cita = :fecha_cita");
        $stmt->bindParam(":fecha_cita", $fecha);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function isHoraDisponible($fecha_cita, $hora_cita)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM cita WHERE fecha_cita = :fecha_cita AND hora_cita = :hora_cita");
        $stmt->bindParam(":fecha_cita", $fecha_cita);
        $stmt->bindParam(":hora_cita", $hora_cita);
        $stmt->execute();
        $citasExisten = $stmt->fetchColumn();
        return $citasExisten == 0;
    }
    
    

    public function setFechaCita($fecha_cita)
    {
        if ($this->validarFechaCita($fecha_cita)) {
            $this->fecha_cita = $fecha_cita;
            return true;
        } else {
            return false;
        }
    }

    public function setHoraCita($hora_cita)
    {
        if ($this->validarHoraCita($hora_cita)) {
            $this->hora_cita = $hora_cita;
            return true;
        } else {
            return false;
        }
    }

    private function validarFechaCita($fecha_cita)
    {
        $fecha_actual = date("Y-m-d");
        return $fecha_cita >= $fecha_actual;
    }

    private function validarHoraCita($hora_cita)
    {
        
        return $hora_cita >= "08:59:59" && $hora_cita <= "17:00:01" && $hora_cita != "13:00:00" ;
    }

    private function SQLQuery($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    private function SQLSentence($sql, $params = [])
    {
        $stmt = $this->SQLQuery($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function createCita($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, $comentario)
    {
        $cita = new self();
        
        $medicoModel = new UsuarioModel($cita->pdo);
        $pacienteModel = new UsuarioModel($cita->pdo);
        $cita->setIdCita();
        $cita->setFechaCita($fecha_cita);
        $cita->setHoraCita($hora_cita);
        $cita->setDiagnostico($diagnostico);
        $cita->setEstado($estado);
        $cita->setComentario($comentario);
        echo $paciente_atend;
        echo $medico_encarg;

        ($cita->setPaciente($pacienteModel->obtenerUsuarioPorID($paciente_atend)));
        ($cita->setMedico($medicoModel->obtenerUsuarioPorID($medico_encarg)));

        try {
            if ($cita->validarFechaCita($fecha_cita) && $cita->validarHoraCita($hora_cita)) {
                
                $stmt = $cita->pdo->prepare("INSERT INTO cita (id_cita,fecha_cita, hora_cita, id_paciente, id_medico, diagnostico, id_estado_cita, comentario) VALUES (?,?, ?, ?, ?, ?, ?, ?)");
                $id_paciente = $cita->getPacienteAtend();
                $id_medico = $cita->getMedicoEncarg();
                $stmt->execute([$cita->getIdCita(),$fecha_cita, $hora_cita, $id_paciente, $id_medico, $diagnostico, $estado, $comentario]);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getCitasDisponibles($startDate, $endDate)
    {
        $startDate = date("Y-m-d", strtotime($startDate));
        $endDate = date("Y-m-d", strtotime($endDate));
    
        // Obtener todas las fechas en el rango especificado
        $fechasEnRango = new \DatePeriod(
            new \DateTime($startDate),
            new \DateInterval('P1D'),
            new \DateTime($endDate . ' + 1 day')
        );
    
        // Obtener las fechas ya reservadas
        $sql = "
            SELECT DISTINCT fecha_cita
            FROM cita
            WHERE fecha_cita BETWEEN :start_date AND :end_date
        ";
        $params = [":start_date" => $startDate, ":end_date" => $endDate];
        $fechasReservadas = $this->SQLSentence($sql, $params);
    
        // Filtrar las fechas disponibles
        $fechasDisponibles = [];
        foreach ($fechasEnRango as $fecha) {
            $fechaStr = $fecha->format("Y-m-d");
            if (!in_array($fechaStr, $fechasReservadas)) {
                $fechasDisponibles[] = $fechaStr;
            }
        }
    
        return $fechasDisponibles;
    }
    
    

    public function getHorariosDisponibles($fecha_cita)
    {
        $fecha_cita = date("Y-m-d", strtotime($fecha_cita));
    
        // Obtener todos los horarios posibles entre 9am y 5pm
        $horariosPosibles = [];
        $horaInicio = new \DateTime($fecha_cita . ' 09:00:00');
        $horaFin = new \DateTime($fecha_cita . ' 18:00:00');
        $intervalo = new \DateInterval('PT1H'); // Intervalo de 1 hora
        $periodo = new \DatePeriod($horaInicio, $intervalo, $horaFin);
    
        foreach ($periodo as $hora) {
            $horariosPosibles[] = $hora->format('H:i:s');
        }
    
        $sql = "SELECT hora_cita FROM cita WHERE fecha_cita = :fecha_cita";
        $params = [":fecha_cita" => $fecha_cita];
        $horariosReservados = $this->SQLSentence($sql, $params);
        array_push($horariosReservados, "13:00:00");
    
        $horariosDisponibles = array_diff($horariosPosibles, $horariosReservados);
    
        return $horariosDisponibles;
    }
    
    public function consultarCita($fecha_cita, $hora_cita)
    {
        $sql = "SELECT * FROM cita WHERE fecha_cita=? AND hora_cita=?";
        $params = [$fecha_cita, $hora_cita];
        $stmt = $this->SQLQuery($sql, $params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo "\n";
        if ($result) {
             $cita=new self();
                $cita = new self();
                $cita->setIdCita();

                $cita->setHoraCita($result['hora_cita']);
                $cita->setPaciente($result['id_paciente']);
                $cita->setMedico($result['id_medico']);
                $cita->setDiagnostico($result['diagnostico']);
                $cita->setEstado($result['id_estado_cita']);
                $cita->setComentario($result['comentario']);

                return $cita;
            
            return $cita;
        } else {
            return null;
        }
    }

    public function modificarCita($fecha_cita, $hora_cita, $nueva_fecha, $nueva_hora, $nuevo_estado, $nuevo_diagnostico, $nuevo_comentario)
    {
        $citaExistente = $this->consultarCita($fecha_cita, $hora_cita);

        if ($citaExistente) {
            
            $nuevasFechasDisponibles = $this->isDiaDisponible($nueva_fecha);
            $nuevasHorasDisponibles = $this->isHoraDisponible($nueva_fecha,$nueva_hora);

            if ($nuevasFechasDisponibles && $nuevasHorasDisponibles) {
                $stmt = $this->pdo->prepare("UPDATE cita SET fecha_cita=?, hora_cita=?, id_estado_cita=?, diagnostico=?, comentario=? WHERE fecha_cita=? AND hora_cita=?");
                $stmt->execute([$nueva_fecha, $nueva_hora, $nuevo_estado, $nuevo_diagnostico, $nuevo_comentario, $fecha_cita, $hora_cita]);
                return true;
            }
        }
        return false;
    }

    public function eliminarCita($fecha_cita, $hora_cita)
    {
        $citaExistente = $this->consultarCita($fecha_cita, $hora_cita);

        if ($citaExistente) {
            $stmt = $this->pdo->prepare("DELETE FROM cita WHERE fecha_cita=? AND hora_cita=?");
            $stmt->execute([$fecha_cita, $hora_cita]);
            return true;
        } else {
            return false;
        }
    }

    public function getCitasProximos30Dias()
    {
        $startDate = date("Y-m-d");
        $endDate = date("Y-m-d", strtotime("+30 days"));

        $citas = [];

        $currentDate = new \DateTime($startDate);
        $endDateObj = new \DateTime($endDate);

        while ($currentDate <= $endDateObj) {
            $dayOfWeek = $currentDate->format("N");

            if ($dayOfWeek >= 1 && $dayOfWeek <= 5) {
                $count = $this->isDiaDisponible($currentDate->format("Y-m-d"));

                if ($count < 8) {
                    $citas[] = $currentDate->format("Y-m-d");
                }
            }

            $currentDate->modify("+1 day");
        }

        return $citas;
    }
}
/* $prueba = new CitaModel();

var_dump($prueba->modificarCita("2023-11-12", "15:00:00", "2023-12-12", "10:00:00", "A", "prueba", "prueba")); */
?>
