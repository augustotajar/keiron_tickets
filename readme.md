1. Ejecutar:
    <pre>git clone https://github.com/augustotajar/keiron_tickets.git</pre>
2. Ejecutar:
    <pre>composer install</pre>
3. Crear una base de datos en MySql para el proyecto:
    <pre>CREATE DATABASE IF NOT EXISTS `keiron_tickets` /*!40100 DEFAULT CHARACTER SET utf8 */;</pre>

4. Copiar el .env.example para crear el .env
5. Configurar las credenciales de la base de datos en el .env recien creado.
6. Ejecutar las migrations y los seeds:
    <pre>php artisan migrate:refresh --seed</pre>
7. Ejecutar el proyecto usando:
    <pre>php artisan serve</pre>
8. Listo!