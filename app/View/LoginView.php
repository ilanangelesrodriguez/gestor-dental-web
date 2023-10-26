<?php

namespace View;

class LoginView
{
    public function mostrarFormulario()
    {
        ?>
        <div class="login__title">Bienvenido<br><span>Introduce los datos de prueba para continuar</span></div>
        <form class="login__form"  method="post" action="?action=procesarFormulario" >

            <input required  class="login__input" name="email" placeholder="Usuario" type="text"><br>
            <input required class="login__input" name="password" placeholder="Contraseña" type="password"><br>

            <button class="login__button" type="submit">Iniciar Sesión</button>
        </form>



        <?php
    }
}
