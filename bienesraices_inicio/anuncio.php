<?php

$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);



//VALINDANDO ID 
if (!$id) {
        header('Location: /bienesraices_inicio/anuncios.php');
}


//IMPORTAR LA BASE DE DATOS
require "includes/confi/database.php";
$db = conectarDB();

//CONSULTA PARA OCTENER LOS DATOS DE LA PROPIEDAD//
$QUERY = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($db, $QUERY);
$row = mysqli_fetch_assoc($resultado);






require 'includes/templates/funciones.php';
incluirTemplate("header");



?>



    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $row["titulo"]; ?></h1>

    
            
        <img loading="lazy" width="300" height="400" src="/bienesraices_inicio/imagenes/<?php echo $row["imagen"]; ?>" alt="imagen de la propiedad">


        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $row["precio"]; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono baño">
                    <p><?php echo $row["wc"]; ?></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono_carro">
                    <p><?php echo $row["estacionamiento"]; ?></p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono cama">
                    <p><?php echo $row["habitaciones"]; ?></p>
                </li>
            </ul>
            <p><?php echo $row["descripcion"]; ?></p>

            
        </div>

    </main>

   <?php incluirTemplate("footer"); ?>