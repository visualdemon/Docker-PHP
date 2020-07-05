# Docker-PHP
Aplicación Docker PHP 7 y Docker Mysql 5.7 conectados Front VUE

//correro mysql linux
docker run -p 3306:3306 --name mysql-service -v /home/ingenia/Escritorio/CRUD-Docker-PHP/BD:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=wilber -d mysql:5.7 --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci

//verificar si esta corriendo 
docker ps

//conectarse a db
docker exec -i -t mysql-service /bin/bash

//crar base de datos ahi o ver info para acceder con workbech

//corre docker de php apache
docker run -p 4000:80 -v /home/ingenia/Escritorio/CRUD-Docker-PHP:/var/www/html --name server-php -d --link mysql-service php:7.0-apache

//en windows correor dpcjer php apache
docker run -p 4000:80 -v "C:\Users\Wilbe\OneDrive\Desktop\Docker PHP:/var/www/html" --name server-php -d --link mysql-service php:7.0-apache

//ver imagenes que estan corriedno
docker ps

//instalar en docker ext para concetarse a mysqli
docker exec -ti server-php /bin/bash
docker-php-ext-install mysqli

//vamos a ruta de la isntalación
cd /usr/local/etc/php

//actualziarmos paquete para poder editar
apt-get update
apt-get install vim nano

//listamos y editamos archivos php.ini development y production
//editamos con nano 

nano php.ini-development
nano php.ini-production

//pegamos el phat en extensions con el comando dynamic extension

extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/mysqli.so


// Creamos la table de la base de datos usuario

CREATE TABLE `usuarios`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`));
