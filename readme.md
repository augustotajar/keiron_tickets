1. Ejecutar:
    git clone https://github.com/augustotajar/keiron_tickets.git
2. Ejecutar:
    composer install
3. Crear una base de datos en MySql para el proyecto:
    CREATE DATABASE IF NOT EXISTS `keiron_tickets` /*!40100 DEFAULT CHARACTER SET utf8 */;

4. Copiar el .env.example para crear el .env
5. Configurar las credenciales de la base de datos en el .env recien creado.
6. Ejecutar las migrations y los seeds:
    php artisan migrate:refresh --seed
7. Ejecutar el proyecto usando:
    php artisan serve
8. Listo!