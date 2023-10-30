<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Home</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">
    <link rel="stylesheet" href="./css/home.css">
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
        <div class="header__right-calendar">
            <?php
            $base_path = __DIR__;
            include dirname($base_path) . '/media/calendar.svg';
            ?>
        </div>
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
    <a href="#home">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V15.25c0-.68.542-1.232 1.217-1.25h2.566a1.25 1.25 0 0 1 1.217 1.25v4.003c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V9.947a2.25 2.25 0 0 0-.8-1.72l-6.75-5.694Z"/>
        </svg>
    </a>

    <a href="#service">
        <svg width="35" height="32" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" fill-rule="evenodd" d="M6 1a1.75 1.75 0 0 0-1.75 1.75V4H3a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.25V2.75A1.75 1.75 0 0 0 10 1H6Zm4.25 3V2.75A.25.25 0 0 0 10 2.5H6a.25.25 0 0 0-.25.25V4h4.5ZM3 5.5h10a.5.5 0 0 1 .5.5v1h-11V6a.5.5 0 0 1 .5-.5Zm-.5 3V13a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8.5H9V10H7V8.5H2.5Z" clip-rule="evenodd"/>
        </svg>
    </a>

    <a href="#calendar">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
            <path class="svg__path" fill="#6b7280" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/>
        </svg>
    </a>

    <a href="#aboutus">
        <svg width="35" height="32" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M96 128a128 128 0 1 1 256 0a128 128 0 1 1-256 0zM0 482.3C0 383.8 79.8 304 178.3 304h91.4c98.5 0 178.3 79.8 178.3 178.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4c89.1 0 161.3 72.2 161.3 161.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9c19.7-26.6 31.3-59.5 31.3-95.1c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
        </svg>
    </a>
</header>


<div id="menu-desplegable" class="header__left-menu header__menu">
    <section class="header__menu-head">
        <div class="header__greet"><p id="saludo"></p> <p>, Ilan</p></div>
        <a id="header__left-close" class="header__menu-close" href="#">
            <svg width="30" height="30" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                <path fill="#0373bf" d="M2.22 2.22a.749.749 0 0 1 1.06 0L6 4.939L8.72 2.22a.749.749 0 1 1 1.06 1.06L7.061 6L9.78 8.72a.749.749 0 1 1-1.06 1.06L6 7.061L3.28 9.78a.749.749 0 1 1-1.06-1.06L4.939 6L2.22 3.28a.749.749 0 0 1 0-1.06Z"/>
            </svg>
        </a>
    </section>

    <a href="#">Inspección</a>
    <a href="#">Tratamiento</a>
    <a href="#">Extirpar</a>
    <a href="#">Braces</a>
    <a href="#">Implantar</a>

</div>


<div class="section__card">
    <div class="skewed">
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
            <section class="main">
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

            <section class="main">
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


                </div>

            </section>

        </div>


    </div>

</div>


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
    let divSaludo = document.getElementById("saludo");

    let saludo = "";
    if (hora >= 6 && hora < 12) {
        saludo = "Buenos días";
    } else if (hora >= 12 && hora < 18) {
        saludo = "Buenas tardes";
    } else {
        saludo = "Buenas noches";
    }
    divSaludo.innerHTML = saludo;



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

</script>

</html>
