    <footer class="footer">
        <?php
        $base_path = __DIR__;
        include dirname($base_path) . '/templates/complaints-book.php';
        ?>
        <div class="footer__section">

            <div class="icon flex">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/templates/icon-dental.php';
                ?>
                <h3 class="icon__h3 px-3 py-2 text-black font-semibold">
                    Bernal<span class="icon__span">Dent</span>
                </h3>
            </div>
            <div class="footer__section-text footer__text-description leading-loose">
                Un centro odontológico comprometido con la excelencia en la salud bucal de sus pacientes. Nuestro equipo profesional y la tecnología avanzada garantizan un cuidado excepcional.
            </div>
            <div class="footer__social card">
                <a class="footer__social-item social-link1">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="165" height="165" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="white">
                        </path>
                    </svg>
                </a>
                <a class="footer__social-item social-link2">
                    <svg height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
                    </svg>
                </a>
                <a class="footer__social-item social-link3">
                    <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z"/>
                    </svg>
                </a>
                <a class="footer__social-item social-link4">
                    <svg width="128" height="128" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none">
                            <path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/>
                            <path fill="#ffffff" d="M19 3a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7.333L4 21.5c-.824.618-2 .03-2-1V6a3 3 0 0 1 3-3h14Zm0 2H5a1 1 0 0 0-1 1v13l2.133-1.6a2 2 0 0 1 1.2-.4H19a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1Zm-8 7a1 1 0 0 1 .117 1.993L11 14H8a1 1 0 0 1-.117-1.993L8 12h3Zm5-4a1 1 0 1 1 0 2H8a1 1 0 0 1 0-2h8Z"/>
                        </g>
                    </svg>
                </a>
            </div>

        </div>
        <div class="footer__section">
            <section>
                <h2 class="footer__section-h2 font-semibold">Sitios de navegación</h2>

                <div class="footer__section-items">
                    <ul class="footer__section-ul footer__section-text">
                        <li>
                            <a href="#home">Inicio</a>
                        </li>
                        <li>
                            <a href="#servicios">Consultas</a>
                        </li>
                        <li>
                            <a href="#servicios">Servicios</a>
                        </li>
                    </ul>
                    <ul class="footer__section-ul footer__section-text">
                        <li>
                            <a href="#aboutus">Sobre nosotros</a>
                        </li>
                        <li>
                            <a href="#">Documentación</a>
                        </li>
                        <li>
                            <a href="#">Política de privacidad</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="footer__section">

            <button id="footer__section-button" class="footer__section-book font-semibold transition delay-150 duration-300 ease-in-out">
                <i class="animation"></i>
                <svg height="30" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ffffff" d="M96 0C43 0 0 43 0 96v320c0 53 43 96 96 96h320c17.7 0 32-14.3 32-32s-14.3-32-32-32v-64c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H96zm0 384h256v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16h192c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48h192c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                </svg>
                Libro de reclamaciones
                <i class="animation"></i>
            </button>

            <p class="footer__section-p">
                <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0m9 0l3 2m-3-7v5"/>
                </svg>
                Lunes a viernes de 9 am a 3 pm.
            </p>
            <p class="footer__section-p">
                <svg width="30" height="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ffffff" d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2zm6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14c4.05-3.7 6-6.8 6-9.14zM12 2c4.2 0 8 3.22 8 8.2c0 3.32-2.67 7.25-8 11.8c-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z"/>
                </svg>
                Cruce entre Jr. León Prado 3000 y Jr. Fray Martín.
            </p>

        </div>
        <section class="footer__credits">
            © Todos Los Derechos Reservados, 2023.
        </section>
    </footer>

    <div class="loader">
        <div class="loader__figure custom-loader"></div>
    </div>

    <script>
        <?php
        $base_path = __DIR__;
        include dirname($base_path) . '/public/js/script.js';
        include dirname($base_path) . '/public/js/navbar.js';
        ?>


        // Función para mostrar el formulario nuevamente
        function mostrarFormulario() {
            document.getElementById("contactus__form-respuesta").style.display = "none";
            document.getElementById("contactus__form").style.display = "flex";
        }

        // Agregar un evento de escucha al formulario
        document.getElementById("contactus__form").addEventListener("submit", function(e) {
            e.preventDefault(); // Prevenir la recarga de la página

            // Captura los valores de nombre y apellidos
            const nombre = document.getElementById("nombre").value;
            const apellidos = document.getElementById("apellido").value;
            const correo = document.getElementById("correo").value;
            const content = document.getElementById("describe").value;
            // Muestra el mensaje con nombre y apellidos
            const mensaje = document.getElementById("contactus__form-respuesta");
            mensaje.style.display = "flex";
            mensaje.innerHTML = `<p class="contactus__form-h2">¡Hola, ${nombre}!</p>
                         <p>Esta sección de nuestra página esta en desarrollo.</p>
                         <p>Puedes contactarnos por Whatsapp.</p>

                        <button class="contactus__form-whatsapp">
    <a href="https://api.whatsapp.com/send?phone=927406438&text=Hola, soy ${nombre} ${apellidos}, quisiera saber sobre esto, ${content}" target="_blank" >
        <svg width="20" height="24" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1c34.8 34.9 56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8c-3.7 5.6-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7c-1.4-2.8-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2c-3.7 0-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3c0 27.3 19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4c4.6-13 4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
        <span>Enviar mensaje</span>
    </a>
</button>

                        <button class="contactus__form-backbutton cssbuttons-io-button" id="mostrarFormulario">
            Mostrar Formulario
            <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g id="evaArrowBackOutline0">
                        <g id="evaArrowBackOutline1">
                            <path id="evaArrowBackOutline2" fill="#6366f1" d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23a1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2Z"/>
                        </g>
                    </g>
                </svg>
            </div>
        </button>
                        `;

            document.getElementById("contactus__form").style.display = "none";

            document.getElementById("mostrarFormulario").addEventListener("click", mostrarFormulario);

        });

        // Agregar un evento de escucha al botón para mostrar el formulario nuevamente
        document.getElementById("mostrarFormulario").addEventListener("click", mostrarFormulario);




    </script>
</body>
</html>