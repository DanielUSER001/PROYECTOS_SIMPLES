<?php

//IMPORTAR LA BASE DE DATOS
require "includes/confi/database.php";
$db = conectarDB();

//CONSULTA PARA OCTENER LOS DATOS DE LA PROPIEDAD//
$QUERY = "SELECT * FROM propiedades LIMIT $limite";
$resultado = mysqli_query($db, $QUERY);



?>




<div class="contenedor-anuncios">
    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
        <div class="anuncio">

            <img loading="lazy" width="300" height="200" src="/bienesraices_inicio/imagenes/<?php echo $row["imagen"]; ?>" alt="anuncio">


            <div class="contenido-anuncio">
                <h3><?php echo $row["titulo"]; ?></h3>
                <p><?php echo $row["descripcion"]; ?></p>
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

                <a class="boton-amarillo" href="anuncio.php?id=<?php echo $row["id"]; ?>">Ver propiedad</a>
            </div>
        </div>
    <?php };  ?>




</div>

<?php
//CERRAr LA CONEXION 
mysqli_close($db);
?>