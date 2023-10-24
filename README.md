<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
<img width="200px" src="media/logo-empresa.png">
</p>

## Gestor Dental Web

Este sistema web ofrece una solución para la administración de clínicas y consultorios médicos. Proporciona herramientas para facilitar la gestión de citas, historiales médicos, facturación y el seguimiento del pacientes. Este proyecto sigue la metodología Gitflow para organizar y gestionar sus ramas en Git.


## Aprendiendo Laravel

Laravel tiene la biblioteca de [documentación](https://laravel.com/docs) y tutoriales en vídeo más extensa y completa de todos los marcos de aplicaciones web modernos, lo que hace que sea muy fácil comenzar con el marco.

Si no tienes ganas de leer, [Laracasts](https://laracasts.com) puede ayudarte. Laracasts contiene más de 2000 tutoriales en vídeo sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejore sus habilidades investigando nuestra completa biblioteca de videos.

## Contribución

Indica cómo los demás pueden contribuir a tu proyecto. Esto podría incluir pautas para solicitudes de extracción (pull requests) y problemas (issues).
[Laravel documentation](https://laravel.com/docs/contributions).

## Instalación

1. Clona este repositorio:

    ```bash
    git clone https://github.com/ilanangelesrodriguez/gestor-dental-web.git
    ```

2. Navega al directorio del proyecto:

    ```bash
    cd gestor-dental-web
    ```


## Metodología Gitflow

1. **Rama Principal (`main`)**

   La rama `main` es la rama principal y se considera la versión estable de la aplicación en producción.


2. **Rama de Desarrollo (`develop`)**

   La rama `develop` es la rama de desarrollo principal. Las nuevas características y mejoras se desarrollan en ramas separadas y se fusionan en `develop` una vez completadas y probadas.


3. **Ramas de Funcionalidad (`feature/`)**

   Las ramas de funcionalidad se utilizan para desarrollar nuevas características. Cada nueva característica se trabaja en su propia rama y se fusiona en `develop` al completarse.

    ```bash
    git checkout develop
    git pull origin develop
    git checkout -b feature/nueva-caracteristica
    # Desarrollo de la nueva característica
    git add .
    git commit -m "Implementar nueva característica"
    git push origin feature/nueva-caracteristica
    ```

4. **Ramas de Hotfix (`hotfix/`)**

   Las ramas de hotfix se utilizan para corregir problemas críticos en producción. Se crean a partir de `main`, se corrigen y se fusionan nuevamente en `main` y `develop`.

    ```bash
    git checkout main
    git pull origin main
    git checkout -b hotfix/1.0.1
    # Corrección del problema crítico
    git add .
    git commit -m "Corregir problema crítico"
    git push origin hotfix/1.0.1
    ```


## Equipo de Desarrollo

1. Angeles Rodriguez, Ilan Néstor
2. Avalos Chong, Sohell Diego Alessandro
3. Dueñas Blas, Joseph Ali
4. Hurtado Ramos, Ronald Fabrizio


## License

Este proyecto está licenciado bajo la [MIT license](https://opensource.org/licenses/MIT).
