<?php

namespace View;

class RegistroView
{
    public function mostrarFormularioRegistro()
    {
        ?>
        <div class="login__title">Registro de Usuario</div>
        <form class="login__form" method="post" action="?action=procesarUsuario">
            <input required class="login__input" name="nombre" placeholder="Nombres" type="text"><br>
            <input required class="login__input" name="apellidos" placeholder="Apellidos" type="text"><br>
            <input required class="login__input" name="usuario" placeholder="Usuario" type="text"><br>
            <input required class="login__input" name="correo" placeholder="Correo" type="email"><br>
            <input required class="login__input" name="password" placeholder="Contraseña" type="password"><br>
            <input required class="login__input" name="confirm_password" placeholder="Confirmar Contraseña" type="password"><br>
            <button class="login__button" type="submit">Registrarse</button>
        </form>
        <?php
    }
}
