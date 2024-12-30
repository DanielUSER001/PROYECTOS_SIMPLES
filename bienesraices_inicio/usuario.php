<?php

//IMPORTAR LA BASE DE DATOS
require "includes/confi/database.php";
$db = conectarDB();

//CREAR CORREO Y CONTRASEÑA//
$email = "daniel@gmail.com";
$password = "12345";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);


//QUERY PARA CREAR LA CUENTA//

$QUERY = "INSERT INTO usuarios (email, password ) VALUES ('$email', '$passwordHash' )";
echo $QUERY;

mysqli_query($db, $QUERY);
?>