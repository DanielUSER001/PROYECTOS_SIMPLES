<?php
require 'includes/templates/funciones.php';
incluirTemplate("header");


?>

    <main class="contenedor seccion">


        <section class="section contenedor">
            <h2>Casas y Depas en Ventas</h2>
            <?php
            $limite = 100;
             include 'includes/templates/anuncios.php';
            ?>
        </section>

    </main>

  <?php incluirTemplate("footer"); ?>