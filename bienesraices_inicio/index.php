<?php
$limite = 3;
$inicio = true;
require "includes/templates/funciones.php";
incluirTemplate("header", $inicio);

?>




<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>


    <div class="iconos-nosotros">

        <div class="icono">
            <img loading="lazy" width="300" height="200" src="./build/img/icono1.svg" alt="icono_seguridad">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime
                officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque
                perspiciatis obcaecati ducimus?</p>
        </div>

        <div class="icono">
            <img loading="lazy" width="300" height="200" src="./build/img/icono2.svg" alt="icono_dinero">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime
                officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque
                perspiciatis obcaecati ducimus?</p>
        </div>

        <div class="icono">
            <img loading="lazy" width="300" height="200" src="./build/img/icono3.svg" alt="icono_tiempo">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet placeat autem enim doloribus maxime
                officiis, tempore, reprehenderit quae, nostrum quidem quo rerum hic aliquam nisi voluptatum cumque
                perspiciatis obcaecati ducimus?</p>
        </div>




        </divc>




</main>




<section class="section contenedor">
    <h2>Casas y Depas en Ventas</h2>

    <?php

    $limite = 3;
    include "includes/templates/anuncios.php"
    ?>


    <div class="btn-verde">
        <a class="boton boton-verde" href="anuncios.php">Ver todas</a>
    </div>


</section>


<section class="img-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo-block">Contactános</a>
</section>

<div class="contenedor seccion contenedor-blog">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" width="300" height="200" src="build/img/blog1.jpg" alt="entra del blog">
                </picture>
            </div>

            <div class="texto-blog">
                <a href="entrada.php">
                    <h4>Terrazae en el techo de tu casa</h4>
                    <p>Escrito el: <span>24/07/2024</span> por <span>Admin</span></p>
                    <p>Consejos para construr una terraza el techo de tu casa con los mejroes materiales y ahorrando
                        dinero</p>
                </a>
            </div>

        </article>





        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" width="300" height="200" src="build/img/blog2.jpg" alt="entra del blog">
                </picture>
            </div>

            <div class="texto-blog">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>24/07/2024</span> por <span>Admin</span></p>
                    <p>Maximiza el espacion de tu hogar con esta guia, aprende a combinar muebles y colores para
                        darle vida a tu espacio</p>
                </a>
            </div>

        </article>

    </section>
    < <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>El pesrsonal se comportó de una excelente forma, muy buena atención y la casa que me
                ofrecieron cumple con mis expectativas</blockquote>
            <p>- Daniel z8</p>
        </div>
        </section>
</div>




<?php incluirTemplate("footer"); ?>