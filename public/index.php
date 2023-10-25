<?php
$base_path = __DIR__;
include dirname($base_path) . '/templates/header.php';
include dirname($base_path) . '/templates/main.php';

?>

<section id="service" class="tratamientos">
    <div class="tratamientos__main">
        <div class="tratamientos__main-title">
            <span class="tratamientos__main-span">
                Tratamientos
            </span>
            <h2 class="tratamientos__main-h2">
                ¿Qué podemos hacer por tus dientes?
            </h2>
        </div>


        <div class="tratamientos__content flex">
            <div class="tratamientos__card">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/tooth-5.svg';
                ?>
                <h4 class="tratamientos__card-title">Implantes</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="tratamientos__card">
                <?php
                include dirname($base_path) . '/media/teeth.svg';
                ?>
                <h4 class="tratamientos__card-title">Limpieza</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="tratamientos__card">
                <?php
                include dirname($base_path) . '/media/braces.svg';
                ?>
                <h4 class="tratamientos__card-title">Braces</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="tratamientos__card">
                <?php
                include dirname($base_path) . '/media/extraction-teeth.svg';
                ?>
                <h4 class="tratamientos__card-title">Extracción de dientes</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="tratamientos__card">
                <?php
                include dirname($base_path) . '/media/tooth-checkup.svg';
                ?>
                <h4 class="tratamientos__card-title">Revisión</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="tratamientos__card">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/tooth-cavities.svg';
                ?>
                <h4 class="tratamientos__card-title">Cavidades</h4>
                <p class="tratamientos__card-description">
                    Rorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>

    </div>

    <div class="tratamientos__asistencia">
        <div class="tratamientos__main-title">
            <span class="tratamientos__main-span">
                Seguimiento
            </span>
            <h2 class="tratamientos__main-h2">
                Sobre la asistencia sanitaria
            </h2>
            <span class="tratamientos__main-span">
                Forem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            </span>
        </div>
            <div class="tratamientos__asistencia-content">
                <div class="tratamientos__asistencia-img">
                    <?php
                    $base_path = __DIR__;
                    include dirname($base_path) . '/media/atention-clinic.svg';
                    ?>
                </div>
                <div class="tratamientos__asistencia-cards">
                    <div class="tratamientos__asistencia-card">a</div>
                    <div class="tratamientos__asistencia-card">a</div>
                    <div class="tratamientos__asistencia-card">a</div>
                </div>

            </div>

    </div>
</section>

<section id="aboutus" class="aboutus flex">
    <div class="aboutus__figure">
        <div class="aboutus__figure-comment">
            <svg height="50" viewBox="0 0 1664 1408" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M768 832v384q0 80-56 136t-136 56H192q-80 0-136-56T0 1216V512q0-104 40.5-198.5T150 150T313.5 40.5T512 0h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136zm896 0v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136V512q0-104 40.5-198.5T1046 150t163.5-109.5T1408 0h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136z"/>
            </svg>
            <div class="aboutus__comment-text">
                Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
            </div>
        </div>

        <img class="aboutus__figure-img rounded-lg " src="https://images.pexels.com/photos/3845745/pexels-photo-3845745.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
    </div>

    <div class="aboutus__figure">
        <img class="aboutus__figure-img aboutus__figure-img2 rounded-lg " src="https://images.pexels.com/photos/4269686/pexels-photo-4269686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <div class="aboutus__figure-card">
            <?php
            $base_path = __DIR__;
            include dirname($base_path) . '/media/dentist.svg';
            ?>
            <div class="e-card playing">
                <div class="image"></div>

                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>

                <div class="infotop">
                    Dr. Tia de Hurtado
                </div>
            </div>
        </div>


    </div>

    <div class="aboutus__description">
        <h2 class="aboutus__description-h2 tratamientos__main-h2">Historia sobre nuestra clínica</h2>
        <p class="aboutus__description-p">
            Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Vorem ipsum dolor sit amet, consectetur adipiscing elit.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        </p>
        <div class="about__description-cards">
            <div class="about__description-card">
                <h3>100+</h3>
                <p>Clientes satisfechos</p>
            </div>
            <div class="about__description-card">
                <h3>100+</h3>
                <p>Atención anual</p>
            </div>
            <div class="about__description-card">
                <h3>100+</h3>
                <p>Clientes satisfechos</p>
            </div>
            <div class="about__description-card">
                <h3>100+</h3>
                <p>Atención anual</p>
            </div>

        </div>
    </div>
    
</section>

    <div id="navbar" class="navbar__footer">
        <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V15.25c0-.68.542-1.232 1.217-1.25h2.566a1.25 1.25 0 0 1 1.217 1.25v4.003c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V9.947a2.25 2.25 0 0 0-.8-1.72l-6.75-5.694Z"/>
        </svg>

        <svg width="40" height="37" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" fill-rule="evenodd" d="M6 1a1.75 1.75 0 0 0-1.75 1.75V4H3a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.25V2.75A1.75 1.75 0 0 0 10 1H6Zm4.25 3V2.75A.25.25 0 0 0 10 2.5H6a.25.25 0 0 0-.25.25V4h4.5ZM3 5.5h10a.5.5 0 0 1 .5.5v1h-11V6a.5.5 0 0 1 .5-.5Zm-.5 3V13a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8.5H9V10H7V8.5H2.5Z" clip-rule="evenodd"/>
        </svg>

        <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
            <path class="svg__path" fill="#6b7280" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/>
        </svg>

        <svg width="40" height="37" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M96 128a128 128 0 1 1 256 0a128 128 0 1 1-256 0zM0 482.3C0 383.8 79.8 304 178.3 304h91.4c98.5 0 178.3 79.8 178.3 178.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4c89.1 0 161.3 72.2 161.3 161.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9c19.7-26.6 31.3-59.5 31.3-95.1c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
        </svg>
    </div>

<?php
include dirname($base_path) . '/templates/footer.php';
?>