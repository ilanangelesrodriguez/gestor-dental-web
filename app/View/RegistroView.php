<?php

namespace View;

class RegistroView
{
    public function mostrarFormularioRegistro()
    {
        ?>
        <div class="login__title">Registro de Usuario</div>
        <form class="login__form" method="post" action="?action=procesarUsuario">
            <div class="primer-grupo login__form">
                <input required class="input" name="nombre" placeholder="Nombres" type="text">
                <input required class="input" name="apellidos" placeholder="Apellidos" type="text">
                <input required class="input" name="usuario" placeholder="Usuario" type="text">
            </div>
            <div class="segundo-grupo login__form" style="display: none;">
                <input required class="input" name="correo" placeholder="Correo" type="email">
                <input required class="input" name="password" placeholder="Contraseña" type="password">
                <input required class="input" name="confirm_password" placeholder="Confirmar Contraseña" type="password">
            </div>
            <button id="boton-next" type="button" class="login__button" onclick="mostrarSiguiente()">Siguiente</button>
            <button type="button" id="boton-anterior" class="login__button" onclick="mostrarAnterior()" style="display: none;">Anterior</button>
            <button id="boton-enviar" class="login__button" type="submit" style="display: none;">Registrarse</button>
        </form>
        <?php
    }
}
