<?php

namespace Model\cita;

use Database\Conexion;
use PDO;

class Cita
{
    public $fecha_cita;
    public $hora_cita;
    public $paciente_atend;
    public $medico_encarg;
    public $diagnostico;
    public $estado;
    public $fecha_prox;
    public $comentario;
    public $pdo;

    public function __construct($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, $fecha_prox, $comentario)
    {
        $this->fecha_cita = $fecha_cita;
        $this->hora_cita = $hora_cita;
        $this->paciente_atend = $paciente_atend;
        $this->medico_encarg = $medico_encarg;
        $this->diagnostico = $diagnostico;
        $this->estado = $estado;
        $this->fecha_prox = $fecha_prox;
        $this->comentario = $comentario;
        $this->pdo = (new Conexion())->conectar();
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

    public function getFechaProx()
    {
        return $this->fecha_prox;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setMedicoEncarg($medico_encarg)
    {
        $this->medico_encarg = $medico_encarg;
    }

    public function validarEstado($estado)
    {
        $estadosValidos = ["pendiente", "atendido", "completado"];
        if (in_array($estado, $estadosValidos)) {
            $this->estado = $estado;
            return true;
        } else {
            return false;
        }
    }

    public function isDiaDisponible($fecha)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM citas WHERE fecha_cita = :fecha_cita");
        $stmt->bindParam(":fecha_cita", $fecha);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function isHoraDisponible($hora_cita)
    {
        $hora = date("H", strtotime($hora_cita));
        return !($hora < 3 || $hora > 12 || ($hora >= 8 && $hora < 9));
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
        $hora_actual = date("H:i:s");
        return $hora_cita >= "09:00:00" && $hora_cita <= "17:00:00" && $hora_cita != "13:00:00" && $hora_cita >= $hora_actual;
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
        $cita = new self($fecha_cita, $hora_cita, $paciente_atend, $medico_encarg, $diagnostico, $estado, null, $comentario);

        if ($cita->validarFechaCita($fecha_cita) && $cita->validarHoraCita($hora_cita)) {
            $stmt = $cita->pdo->prepare("INSERT INTO cita (fecha_cita, hora_cita, id_paciente, id_medico, diagnostico, id_estado_cita, comentario) VALUES (?, ?, ?, ?, ?, ?, ?)");

            $id_paciente = $cita->getPacienteAtend();
            $id_medico = $cita->getMedicoEncarg();
            $id_estado_cita = $cita->getEstado();

            $stmt->execute([$fecha_cita, $hora_cita, $id_paciente, $id_medico, $diagnostico, $id_estado_cita, $comentario]);

            return true;
        } else {
            return false;
        }
    }

    public function getCitasDisponibles($startDate, $endDate)
    {
        $startDate = date("Y-m-d", strtotime($startDate));
        $endDate = date("Y-m-d", strtotime($endDate));

        $sql = "SELECT fecha_cita FROM citas WHERE fecha_cita BETWEEN :start_date AND :end_date AND WEEKDAY(fecha_cita) NOT IN (5, 6) GROUP BY fecha_cita";
        $params = [":start_date" => $startDate, ":end_date" => $endDate];
        return $this->SQLSentence($sql, $params);
    }

    public function getHorariosDisponibles($fecha_cita)
    {
        $fecha_cita = date("Y-m-d", strtotime($fecha_cita));

        $sql = "SELECT hora_cita FROM citas WHERE fecha_cita = :fecha_cita AND HOUR(hora_cita) >= 3 AND HOUR(hora_cita) < 12 AND HOUR(hora_cita) != 8";
        $params = [":fecha_cita" => $fecha_cita];
        return $this->SQLSentence($sql, $params);
    }

    public function consultarCita($fecha_cita, $hora_cita)
    {
        $sql = "SELECT * FROM cita WHERE fecha_cita=? AND hora_cita=?";
        $params = [$fecha_cita, $hora_cita];
        $stmt = $this->SQLQuery($sql, $params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new self(
                $result['fecha_cita'],
                $result['hora_cita'],
                $result['id_paciente'],
                $result['id_medico'],
                $result['diagnostico'],
                $result['id_estado_cita'],
                $result['fecha_prox'],
                $result['comentario']
            );
        } else {
            return null;
        }
    }

    public function modificarCita($fecha_cita, $hora_cita, $nueva_fecha, $nueva_hora, $nuevo_estado, $nuevo_diagnostico, $nuevo_comentario)
    {
        $citaExistente = $this->consultarCita($fecha_cita, $hora_cita);

        if ($citaExistente) {
            $nuevasFechasDisponibles = $this->isDiaDisponible($nueva_fecha);
            $nuevasHorasDisponibles = $this->isHoraDisponible($nueva_hora);

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
