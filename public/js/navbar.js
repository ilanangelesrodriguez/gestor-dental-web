const navbarLink = document.querySelectorAll(".navbar__footer-a");

navbarLink.forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();

        navbarLink.forEach(link => {
            link.classList.remove("active");
        });

        this.classList.add("active");

        const targetId = this.getAttribute("href").substring(1); // Obtén el ID de la sección
        const targetSection = document.getElementById(targetId); // Encuentra el elemento de la sección

        if (targetSection) {
            targetSection.scrollIntoView({ behavior: "smooth" }); // Desplázate a la sección
        }
    });
});

