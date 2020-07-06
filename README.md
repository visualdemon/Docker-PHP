# Docker-PHP

Aplicación Docker PHP 7 y Docker Mysql 5.7 conectados Front VUEjs

**descargar imagen de mysql y php**

docker pull mysql:5.7

docker pull php:7.0-apache

**Comprobar lista de imágenes**

docker images

**Correr mysql windows**

docker run -p 3306:3306 --name mysql-service -v &quot;C:\Users\Wilbe\OneDrive\Desktop\Docker PHP/BD:/var/lib/mysql&quot; -e MYSQL\_ROOT\_PASSWORD=wilber -d mysql:5.7 --character-set-server=utf8mb4 --collation-server=utf8mb4\_unicode\_ci

**Correr mysql linux**

docker run -p 3306:3306 --name mysql-service -v /home/ingenia/Escritorio/CRUD-Docker-PHP/BD:/var/lib/mysql -e MYSQL\_ROOT\_PASSWORD=wilber -d mysql:5.7 --character-set-server=utf8mb4 --collation-server=utf8mb4\_unicode\_ci

**Verificar si está corriendo**

docker ps

**Conectarse a db**

docker exec -i -t mysql-service /bin/bash

**Crear base de datos ahí o ver info para acceder con workbech**

Base de datos usuario tabla idUsuario, nombre, telefono, email

CREATE TABLE `usuarios`.`usuario` (

`idUsuario` INT NOT NULL AUTO\_INCREMENT,

`nombre` VARCHAR(45) NOT NULL,

`telefono` VARCHAR(45) NOT NULL,

`email` VARCHAR(45) NOT NULL,

PRIMARY KEY (`idUsuario`));

**Corre docker de php apache**

docker run -p 4000:80 -v /home/ingenia/Escritorio/CRUD-Docker-PHP:/var/www/html --name server-php -d --link mysql-service php:7.0-apache

**En windows correr dockjer php apache**

docker run -p 4000:80 -v &quot;C:\Users\Wilbe\OneDrive\Desktop\Docker PHP:/var/www/html&quot; --name server-php -d --link mysql-service php:7.0-apache

**Ver imágenes que están corriendo**

docker ps

**Instalar en docker ext para concetarse a mysqli**

docker exec -ti server-php /bin/bash

docker-php-ext-install mysqli

**Vamos a la ruta de la instalación**

cd /usr/local/etc/php

**Actualizamos docker paquete instalamos nano para poder editar archivo php.ini**

apt-get update

apt-get install vim nano

**Listamos y editamos archivos php.ini development y production y editamos con nano**

nano php.ini-development

nano php.ini-production

**Pegamos el phat en extensions en la sección dynamic extension de docker**

extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/mysqli.so