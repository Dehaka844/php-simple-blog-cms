# Blog CMS - Arquitectura MVC (PHP Nativo)

Este proyecto es un sistema de gestión de contenidos desarrollado bajo el patrón de diseño **Modelo-Vista-Controlador (MVC)**. A diferencia de un desarrollo procedural, este enfoque separa las responsabilidades, facilitando el mantenimiento y la escalabilidad del software.

## Características Técnicas
- **Patrón MVC:** Separación clara entre lógica de datos, controladores y plantillas de vista.
- **Front Controller:** Todas las peticiones son gestionadas por un único punto de entrada (`public/index.php`).
- **Programación Orientada a Objetos (POO):** Uso de clases y namespaces.
- **Seguridad:** PDO para consultas preparadas y `password_hash` para gestión de credenciales.

## Requisitos
- Servidor Apache con `mod_rewrite` activado.
- PHP 8.x
- MySQL
