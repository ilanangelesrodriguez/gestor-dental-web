<?php

namespace View;

use Model\Login\AuthMedico;
use Model\Login\AuthPaciente;
use Model\Login\LoginModel;

class LoginView
{
    public function mostrarFormulario()
    {
        ?>
        <form class="login__form"  method="post" action="?action=procesarFormulario" >
            <div class="login__title">Bienvenido<br><span>Introduce los datos de prueba para continuar</span></div>
            <input required autocomplete="off" class="input" name="email" placeholder="Usuario" type="text">
            <input required autocomplete="off" class="input" name="password" placeholder="Contraseña" type="password">
            <select name="user_type" class="login__select">
                <option value="medico">Médico</option>
                <option value="paciente">Paciente</option>
            </select>

            <button class="login__button" type="submit" onclick="ocultarBoton()">Iniciar Sesión</button>
        </form>

        <?php
    }

}
