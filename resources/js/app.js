import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function mostrarFormulario() {
    document.getElementById("contactus__form-respuesta").style.display = "none";
    document.getElementById("contactus__form").style.display = "flex";
}

document.getElementById("contactus__form").addEventListener("submit", function(e) {
    e.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const apellidos = document.getElementById("apellido").value;
    const correo = document.getElementById("correo").value;
    const content = document.getElementById("describe").value;

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

document.getElementById("mostrarFormulario").addEventListener("click", mostrarFormulario);
