<?php

namespace View;

require_once __DIR__."/../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();

class LoginView
{
    public function mostrarFormulario()
    {
        ?>
        <form class="login__form"  method="post" action="?action=procesarFormulario" >
            <div class="login__title">Bienvenido<br><span>Introduce los datos de prueba para continuar</span></div>
            <input required autocomplete="off" class="input" name="email" placeholder="Usuario" type="text">
            <input required autocomplete="off" class="input" name="password" placeholder="Contraseña" type="password">
            

            <button class="login__button" type="submit" onclick="ocultarBoton()">Iniciar Sesión</button>

        </form>

        <?php
    }

}
