<?php

namespace View;

class CitaView
{
    public function mostrarFormularioCita()
    {
        ?>
            <div class="cita-container">
                <div class="cita__title">Programar Cita</div>
                <form class="cita__form" method="post" action="?action=procesarCita">
                    <input required class="input" name="fecha_cita" placeholder="Fecha de la cita" type="date">
                    <input required class="input" name="hora_cita" placeholder="Hora de la cita" type="time">
                    <input required class="input" name="paciente_atend" placeholder="Nombre del paciente" type="text">
                    <input required class="input" name="medico_encarg" placeholder="Nombre del Médico" type="text">
                    <input required class="input" name="diagnostico" placeholder="Diagnóstico del Médico" type="text">
                    <input required class="input" name="estado" placeholder="Estado de la cita" type="text">
                    <input required class="input" name="fecha_prox" placeholder="Fecha Próxima Cita" type="date">
                    <input required class="input" name="comentario" placeholder="Comentario adicional del paciente" type="text">
                    <button type="submit" class="cita__button">Programar Cita</button>
                </form>
            </div>
        <?php
    }
}
