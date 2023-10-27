<?php

namespace View;

class RegistroView
{
    public function mostrarFormularioRegistro()
    {
        ?>
        <div class="login__title">Registro de Usuario</div>
        <form class="login__form" method="post" action="?action=procesarUsuario">
            <input required class="input" name="nombre" placeholder="Nombres" type="text">
            <input required class="input" name="apellidos" placeholder="Apellidos" type="text">
            <input required class="input" name="usuario" placeholder="Usuario" type="text">
            <input required class="input" name="correo" placeholder="Correo" type="email">
            <input required class="input" name="password" placeholder="Contraseña" type="password">
            <input required class="input" name="confirm_password" placeholder="Confirmar Contraseña" type="password">
            <button class="login__button" type="submit">Registrarse</button>
        </form>
        <?php
    }
}
