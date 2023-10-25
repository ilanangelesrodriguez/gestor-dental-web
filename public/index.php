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
            <span class="tratamientos__main-span tratamientos__main-span-foot">
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
                    <div class="tratamientos__asistencia-card">
                        <?php
                        include dirname($base_path) . '/media/dentist-2.svg';
                        ?>
                        <div class="tratamientos__asistencia-card-content">
                            <h3 class="tratamientos__asistencia-card-content-title">Consultoria de calidad</h3>
                            <p class="tratamientos__asistencia-card-content-p">Rorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="tratamientos__asistencia-card">
                        <?php
                        include dirname($base_path) . '/media/dentist-2.svg';
                        ?>
                        <div>
                            <h3 class="tratamientos__asistencia-card-content-title">Respuesta rápida</h3>
                            <p class="tratamientos__asistencia-card-content-p">Rorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="tratamientos__asistencia-card">
                        <?php
                        include dirname($base_path) . '/media/dentist-2.svg';
                        ?>
                        <div>
                            <h3 class="tratamientos__asistencia-card-content-title">Medidas de seguridad</h3>
                            <p class="tratamientos__asistencia-card-content-p">Rorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
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
                    Dr. Roxana Bernal
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


<?php
include dirname($base_path) . '/templates/footer.php';
?>