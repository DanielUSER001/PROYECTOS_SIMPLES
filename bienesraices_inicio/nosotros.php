<?php
require 'includes/templates/funciones.php';

incluirTemplate("header"); 




?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" width="400" height="400" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de experiencia</blockquote>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas doloremque perspiciatis amet. Odit dolor officia blanditiis exercitationem sed possimus fugiat commodi tempore ex libero, eius rerum necessitatibus soluta praesentium doloremque.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur itaque perspiciatis quidem, consequuntur illum obcaecati porro tempore quia repellendus aperiam saepe non eius suscipit sunt officia in libero voluptates.</p>
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>


        <div class="iconos-nosotros">

            <div class="icono">
                <img loading="lazy" src="./build/img/icono1.svg" alt="icono_seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque perspiciatis obcaecati ducimus?</p>
            </div>

            <div class="icono">
                <img loading="lazy" src="./build/img/icono2.svg" alt="icono_dinero">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque perspiciatis obcaecati ducimus?</p>
            </div>

            <div class="icono">
                <img loading="lazy" src="./build/img/icono3.svg" alt="icono_tiempo">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque perspiciatis obcaecati ducimus?</p>
            </div>




        </divc>




    </section>







    <?php incluirTemplate("footer"); ?>