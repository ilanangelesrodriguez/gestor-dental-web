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
                Tratamientos
            </span>
            <h2 class="tratamientos__main-h2">
                Sobre la asistencia sanitaria
            </h2>
        </div>

    </div>
</section>
<section id="aboutus">

</section>
<section id="contact">

</section>

<?php
include dirname($base_path) . '/templates/footer.php';
?>