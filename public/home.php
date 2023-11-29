<?php

if (isset($_GET['nombre']) && isset($_GET['tipo'])) {
    $nombreUsuario = $_GET['nombre'];
    $tipoUsuario = $_GET['tipo'];

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Home</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        <?php

        if ($tipoUsuario == "medico") {
            echo '
            :root {
                --main-color: #539987;
                --card-bg-color: rgba(82, 255, 184, 0.70);
                --second-bg-color: white;
            }
            .main__special {
                display: none;
            }
            ';
        } elseif ($tipoUsuario == "paciente"){
            echo '
            :root {
                --main-color: #0373B0;
                --card-bg-color: rgba(110, 195, 224, 0.70);
                --second-bg-color: white;
            }
            ';
        }
        ?>


        <?php
        $base_path = __DIR__;
        include dirname($base_path) . '/public/css/home.css';
        ?>
    </style>
</head>
<body>

<header class="header">

    <div class="header__div header__left">
        <a id="header__left-burger" href="#">
            <svg width="50" height="50" viewBox="-5 -7 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M1 0h5a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2zm7 8h5a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2zM1 4h12a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2z"/>
            </svg>
        </a>

    </div>
    <div class="header__div header__icon">
        <h3 class="header__icon-h3">
            Bernal<span class="header__icon-span">Dent</span>
        </h3>
    </div>
    <div class="header__div header__right">
        <!-- <div class="header__right-calendar">
            <?php
            $base_path = __DIR__;
            include dirname($base_path) . '/media/calendar.svg';
            ?>
        </div> -->
        <div class="header__right-user">
            <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g fill="none">
                    <path fill="white" d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z" opacity=".16"/>
                    <path stroke="white" stroke-linejoin="round" stroke-width="2" d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z"/>
                    <circle cx="12" cy="7" r="3" stroke="white" stroke-width="2"/>
                </g>
            </svg>
        </div>
    </div>

</header>

<header id="navbar" class="navbar__footer">
    <a class="navbar__footer-a" href="#home">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V15.25c0-.68.542-1.232 1.217-1.25h2.566a1.25 1.25 0 0 1 1.217 1.25v4.003c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V9.947a2.25 2.25 0 0 0-.8-1.72l-6.75-5.694Z"/>
        </svg>
    </a>

    <a class="navbar__footer-a" href="#service">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0"/><path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0-6 0m-2.832 8.849A4 4 0 0 1 10 16h4a4 4 0 0 1 3.834 2.855"/></g></svg>
    </a>

    <a class="navbar__footer-a" href="#calendar">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
            <path class="svg__path" fill="#6b7280" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/>
        </svg>
    </a>

    <a class="navbar__footer-a" id="close" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 20 20"><g fill="#b97474" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.027 7.232a1 1 0 0 1 1.408.128l2.083 2.5a1 1 0 0 1-1.536 1.28l-2.083-2.5a1 1 0 0 1 .128-1.408Z"/><path d="M15.027 13.768a1 1 0 0 1-.129-1.408l2.084-2.5a1 1 0 1 1 1.536 1.28l-2.083 2.5a1 1 0 0 1-1.408.128Z"/><path d="M17.5 10.5a1 1 0 0 1-1 1H10a1 1 0 1 1 0-2h6.5a1 1 0 0 1 1 1ZM3 3.5a1 1 0 0 1 1-1h9a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Zm0 14a1 1 0 0 1 1-1h9a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Z"/><path d="M13 2.5a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm0 10a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm-9-10a1 1 0 0 1 1 1v14a1 1 0 1 1-2 0v-14a1 1 0 0 1 1-1Z"/></g></svg>
    </a>

    <div id="closeOption" class="navbar__footer-close">
        <span>¿Estás seguro?</span>
        <ul>
            <li class="navbar__footer-close-yes">
                <a href="login.php">Si</a>
            </li>
            <li id="closeOption-no" class="navbar__footer-close-no">
                <a href="" onclick="ocultarOpciones()">No</a>
            </li>
        </ul>
    </div>

</header>


<div id="menu-desplegable" class="header__left-menu header__menu">
    <section class="header__menu-head">
        <a id="header__left-close" class="header__menu-close" href="#">
            <svg width="30" height="30" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fffff" d="M2.22 2.22a.749.749 0 0 1 1.06 0L6 4.939L8.72 2.22a.749.749 0 1 1 1.06 1.06L7.061 6L9.78 8.72a.749.749 0 1 1-1.06 1.06L6 7.061L3.28 9.78a.749.749 0 1 1-1.06-1.06L4.939 6L2.22 3.28a.749.749 0 0 1 0-1.06Z"/>
            </svg>
        </a>
        <div class="header__greet-menu"><p id="saludo" class="saludo"></p> <p>, <?php echo $nombreUsuario?></p></div>

    </section>
    <nav class="header__menu-nav">
        <a href="#">Inspección</a>
        <a href="#">Tratamiento</a>
        <a href="#">Extirpar</a>
        <a href="#">Braces</a>
        <a href="#">Implantar</a>
    </nav>

    <div class="header__menu-signoff">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 20 20">
            <g fill="#b97474" fill-rule="evenodd" clip-rule="evenodd">
                <path d="M15.027 7.232a1 1 0 0 1 1.408.128l2.083 2.5a1 1 0 0 1-1.536 1.28l-2.083-2.5a1 1 0 0 1 .128-1.408Z"/>
                <path d="M15.027 13.768a1 1 0 0 1-.129-1.408l2.084-2.5a1 1 0 1 1 1.536 1.28l-2.083 2.5a1 1 0 0 1-1.408.128Z"/>
                <path d="M17.5 10.5a1 1 0 0 1-1 1H10a1 1 0 1 1 0-2h6.5a1 1 0 0 1 1 1ZM3 3.5a1 1 0 0 1 1-1h9a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Zm0 14a1 1 0 0 1 1-1h9a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1Z"/>
                <path d="M13 2.5a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm0 10a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0v-4a1 1 0 0 1 1-1Zm-9-10a1 1 0 0 1 1 1v14a1 1 0 1 1-2 0v-14a1 1 0 0 1 1-1Z"/>
            </g>
        </svg>
        <a href="login.php">Salir</a>
    </div>

</div>


<div class="header__div-greet">

    <?php

    if (isset($_GET['nombre']) && isset($_GET['tipo'])) {
        $nombreUsuario = $_GET['nombre'];
        $tipoUsuario = $_GET['tipo'];

    }



    ?>

    <div class="header__greet"><p id="saludo"></p> <p>, <?php echo $nombreUsuario?></p></div>

</div>

<div class="section__card">

        <div class="section__info-cards">
            <div class="section__info-card">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/atention-clinic.svg';
                ?>
                <div class="section__info-content">
                    <h3>Nueva cita</h3>
                    <p>Planifique su visita a la clínica</p>
                </div>
            </div>
            <div class="section__info-card">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/schedule.svg';
                ?>
                <div class="section__info-content">
                    <h3>Tu cronograma</h3>
                    <p>Verifica la lista de tus visitas</p>
                </div>
            </div>
        </div>

        <div class="section__main">

            <section class="main main__procedure">
                <div class="main__head">
                    <h3 class="main__head-title">
                        Nuestros procedimientos
                    </h3>
                    <div class="main__procedure-cards">

                        <div class="main__procedure-item">
                            <?php
                            $base_path = __DIR__;
                            include dirname($base_path) . '/media/tooth-5.svg';
                            ?>
                            <h4 class="main__procedure-title">Implantes</h4>
                            <p class="main__procedure-description">
                                Reemplazo de dientes con tornillos de titanio.
                            </p>
                        </div>

                        <div class="main__procedure-item">

                            <?php
                            include dirname($base_path) . '/media/teeth.svg';
                            ?>
                            <h4 class="main__procedure-title">Limpieza</h4>
                            <p class="main__procedure-description">
                                Eliminación de sarro para una boca saludable.
                            </p>

                        </div>

                        <div class="main__procedure-item">
                            <?php
                            include dirname($base_path) . '/media/braces.svg';
                            ?>
                            <h4 class="main__procedure-title">Braces</h4>
                            <p class="main__procedure-description">
                                Corrección de dientes con aparatos ortodónticos.
                            </p>
                        </div>

                        <div class="main__procedure-item">
                            <?php
                            include dirname($base_path) . '/media/extraction-teeth.svg';
                            ?>
                            <h4 class="main__procedure-title">Extracción de dientes</h4>
                            <p class="main__procedure-description">
                                Eliminación de dientes dañados.
                            </p>
                        </div>

                        <div class="main__procedure-item">
                            <?php
                            include dirname($base_path) . '/media/tooth-checkup.svg';
                            ?>
                            <h4 class="main__procedure-title">Revisión</h4>
                            <p class="main__procedure-description">
                                Evaluación periódica de la salud bucal.
                            </p>
                        </div>

                        <div class="main__procedure-item">
                            <?php
                            $base_path = __DIR__;
                            include dirname($base_path) . '/media/tooth-cavities.svg';
                            ?>
                            <h4 class="main__procedure-title tratamientos__card-title">Cavidades</h4>
                            <p class="main__procedure-description tratamientos__card-description">
                                Reparación de dientes afectados por caries.
                            </p>
                        </div>

                    </div>

                </div>
            </section>

            <section class="main main__special">
                <h3 class="main__head-title">
                    Nuestros especialistas
                </h3>

                <div class="main__cards">

                    <div class="main__card-container">
                        <div class="main__card">
                            <div class="main__card-content">
                                <p>Dra. Roxana Bernal Valencia</p>
                            </div>
                            <div class="main__card-icon">
                                <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="M5 6h14v2H5z" opacity=".3"/>
                                    <path fill="#ffffff" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="main__card-container">
                        <div class="main__card">
                            <div class="main__card-content">
                                <p>Dr. Walter Escalante</p>
                            </div>
                            <div class="main__card-icon">
                                <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff" d="M5 6h14v2H5z" opacity=".3"/>
                                    <path fill="#ffffff" d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zM9 14H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4H7v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>

            </section>

        </div>

</div>

<section class="section__about">
    <h3 class="main__head-title">
        Ubicación
    </h3>
    <div class="section__about-div">

        <div class="section__about-map">
            <iframe class="section__about-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d414.11065147827156!2d-78.56847124207948!3d-9.09046401487184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ab81531233b987%3A0xa1a4c90fdcb8367b!2sFray%20Martin%2C%20Chimbote%2002804!5e0!3m2!1ses-419!2spe!4v1698288060465!5m2!1ses-419!2spe" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="section__about-ubication">
            <p>Cruce entre Jr. León Prado 3000 y Jr. Fray Martín.</p>
            <p>Disponibilidad</p>
            <p>Lunes a viernes</p>
            <p>Horarios</p>
            <p>9am a 3pm</p>
        </div>

    </div>

</section>



<div class="loader">
    <div class="loader__figure custom-loader"></div>
</div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        setTimeout(function() {
            document.querySelector(".loader").style.display = "none";
        }, 2000);

    });

    function volver() {
        window.history.back();
    }



    let fechaYHora = new Date();
    let hora = fechaYHora.getHours();
    let elementosSaludo = document.querySelectorAll("#saludo");

    elementosSaludo.forEach(function (divSaludo) {
        let saludo = "";
        if (hora >= 6 && hora < 12) {
            saludo = "Buenos días";
        } else if (hora >= 12 && hora < 18) {
            saludo = "Buenas tardes";
        } else {
            saludo = "Buenas noches";
        }
        divSaludo.innerHTML = saludo;
    });



    let icon = document.getElementById("header__left-burger");
    let menuDesplegable = document.getElementById("menu-desplegable");
    let iconClose = document.getElementById("header__left-close");

    icon.addEventListener("click", function(event) {
        event.stopPropagation();

        if (menuDesplegable.style.display === "block") {
            menuDesplegable.style.display = "none";
        } else {
            menuDesplegable.style.display = "flex";
        }
    });

    iconClose.addEventListener("click", function(event) {
        event.stopPropagation();

        if (menuDesplegable.style.display === "flex") {
            menuDesplegable.style.display = "none";
        }
    });

    <?php
    $base_path = __DIR__;
    include dirname($base_path) . '/public/js/navbar.js';
    ?>

    const etiquetaA = document.getElementById("close");
    const opciones = document.getElementById("closeOption");

    etiquetaA.addEventListener("click", function(event) {
        event.preventDefault(); // Evita la acción predeterminada del enlace

        if (opciones.style.display === "none") {
            opciones.style.display = "flex";
        } else {
            opciones.style.display = "none";
        }
    });

    function ocultarOpciones() {
        const div = document.getElementById("closeOption");
        div.style.display = "none";
    }




</script>

</html>
