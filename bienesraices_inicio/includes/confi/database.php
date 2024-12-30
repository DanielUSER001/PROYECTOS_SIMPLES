<?php

function conectarDB() : mysqli {
    $db = mysqli_connect("localhost", "root", "Da2ed002", "bienesraices_crud");


    if(!$db) {
        echo "conexion fallida a la base de datos";
        exit;
    }

    return $db;
}