<?php
    
    // // Variables de la conexion a la DB
    // $mysqli = new mysqli("mysql-service:3306", "root", "wilber", "usuarios");
    
    // Comprobamos la conexion
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
         echo "Conexion exitosa";
    }

    //$conn = mysqli_connect("mysql-service:3306", "root", "wilber", "usuarios");
    
?>