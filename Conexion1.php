<?php

    // VARIABLES QUE ALMACENAN LA CONEXION A LA BASE DE DATOS
    $mysqli = new mysqli(
        "localhost",
        "root",
        "",
        "login1"
    );

    // COMPROBAMOS LA CONEXION
    if($mysqli->connect_errno) {
        die("conexión exitasa");
    } else {
        //echo "Conexion exitosa";
    }

?>