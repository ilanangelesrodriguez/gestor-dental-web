$(document).ready(function () {
    const body = document.querySelector("body");
    // Navigation bar effects on scroll
    // Navigation dropdawn
    const profile = $('.profile'),
        menu = $('.menu');
    $(profile).click(function () {
        $(menu).toggleClass('active');
    });
    $(body).click(function (e) {
        // Si el clic fue en un elemento que no es hijo de la etiqueta imgBox
        if (!$(e.target).closest('.imgBox').length) {
            $(menu).removeClass('active');
        }
    });

    //Menu toggle
    //input de tipo checkbox
    const swictherTheme = document.querySelector('.check');

    //raiz del documento
    const root = document.documentElement;

    if (root.getAttribute('data-theme') === 'dark') {
        swictherTheme.checked = true;
    }

    //ejecutando un evento cuando se hizo click en checkbox
    swictherTheme.addEventListener('click', toggleTheme);

    //funcion para cambiar al tema dark o light
    function toggleTheme() {
        const setTheme = swictherTheme.checked ? 'dark' : 'light';

        root.setAttribute('data-theme', setTheme);

        //usando el localstorage para guardar los cambios de la pagina al recargarla

        //almacenando una variable theme en el localstorage
        localStorage.setItem('theme', setTheme);
    }

    //Theme mode
    const toggle = document.querySelector('#toggle');
    const sunIcon = document.querySelector('.toggle .bxs-sun');
    const moonIcon = document.querySelector('.toggle .bx-moon');
    toggle.addEventListener('change', changeThemeMode);

    function changeThemeMode() {
        sunIcon.className = sunIcon.className == 'bx bxs-sun' ? 'bx bx-sun' : 'bx bxs-sun';
        moonIcon.className = moonIcon.className == 'bx bxs-moon' ? 'bx bx-moon' : 'bx bxs-moon';
    }

    // Responsive navigation menu toggle
    const menuBtn = document.querySelector(".nav-menu-btn");
    const closeBtn = document.querySelector(".nav-close-btn");
    const navigation = document.querySelector(".navigation");


    $(menuBtn).click(function () {
        $(navigation).addClass("active");
    });

    $(closeBtn).click(function () {
        $(navigation).removeClass('active');
    });

    $(body).click(function (e) {
        // Si el clic fue en un elemento que no es hijo de la etiqueta nav-menu-btn
        if (!$(e.target).closest('.nav-menu-btn').length) {
            $(navigation).removeClass('active');
        }
    });

    //Navbar menu mobile
    const navMenu=document.querySelector('.menuToggle');
    const navItems=document.querySelector('.nav');
    navMenu.addEventListener('click',showMenu);
    function showMenu(){
        navItems.classList.toggle('show');
    }
});