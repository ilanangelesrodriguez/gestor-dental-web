# gestor-dental-web

Este sistema web ofrece una solución para la administración de clínicas y consultorios médicos. Proporciona herramientas para facilitar la gestión de citas, historiales médicos, facturación y el seguimiento del pacientes. Este proyecto sigue la metodología Gitflow para organizar y gestionar sus ramas en Git.

## Estructura de Carpetas

- **📂 app:** Contiene la lógica de la aplicación.
  - **📁 Controllers:** Controladores que manejan las solicitudes del usuario.
  - **📁 Models:** Modelos que representan la lógica de negocios y manejan la interacción con la base de datos.
  - **📁 Views:** Vistas o plantillas que se mostrarán al usuario.

- **📂 public:** Contiene archivos públicos accesibles desde el navegador.
  - **📁 css:** Estilos CSS para el diseño de la interfaz.
  - **📁 js:** Archivos JavaScript para la interactividad del cliente.
  - **📁 img:** Carpeta para imágenes y otros recursos multimedia.

- **📂 config:** Archivos de configuración, como conexiones a la base de datos o configuraciones globales.

- **📂 vendor:** Dependencias externas gestionadas por Composer (si estás utilizando Composer para la gestión de paquetes).

- **📂 templates:** Plantillas reutilizables que pueden ser utilizadas en diferentes partes de la aplicación.

- **📂 database:** Scripts de creación de base de datos o migraciones.

## Instalación

1. Clona este repositorio:

    ```bash
    git clone https://github.com/ilanangelesrodriguez/gestor-dental-web.git
    ```

2. Navega al directorio del proyecto:

    ```bash
    cd gestor-dental-web
    ```

3. Configura el archivo de entorno (si es necesario).

4. Configura tu servidor web (Apache, Nginx, etc.) para apuntar al directorio `public` como el documento raíz.

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

## Historial de Cambios

Todas las versiones del proyecto se registran aquí con sus cambios asociados.

1. **Formato de Mensajes de Commit**

    - **feat:** Nueva característica para el usuario
    - **fix:** Solución de un problema para el usuario
    - **chore:** Cambios internos que no afectan al usuario
    - **docs:** Cambios en la documentación
    - **style:** Cambios en el formato del código (sin cambios en la lógica)
    - **refactor:** Modificaciones en el código que no solucionan un problema ni añaden una característica
    - **test:** Adición o modificación de pruebas
    
2. **Ejemplos de Commits**

    - `feat: Agregar función de registro de usuarios`
    - `fix: Corregir error en la validación de correo electrónico`
    - `chore: Optimizar manejo de archivos`
    - `docs: Actualizar README con instrucciones detalladas de instalación`
    - `style: Aplicar formato consistente a los archivos CSS`
    - `refactor: Simplificar la lógica de procesamiento de archivos`
    - `test: Agregar casos de prueba para la funcionalidad de búsqueda`

## Contribución

Indica cómo los demás pueden contribuir a tu proyecto. Esto podría incluir pautas para solicitudes de extracción (pull requests) y problemas (issues).

## Tecnologías Utilizadas

- PHP
- JavaScript (si es aplicable)
- CSS

---

## Equipo de Desarrollo

1. Angeles Rodriguez, Ilan Néstor

2. Avalos Chong, Sohell Diego Alessandro

3. Dueñas Blas, Joseph Ali

4. Hurtado Ramos, Ronald Fabrizio

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](LICENSE).

