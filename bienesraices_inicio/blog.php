<?php

require 'includes/templates/funciones.php';
incluirTemplate("header");



?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestroo Blog</h1>
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
                        <h4>Terrazae en el  techo de tu casa</h4>
                        <p>Escrito el: <span>24/07/2024</span> por <span>Admin</span></p>
                        <p>Consejos para construr una terraza el techo de tu casa con los mejroes materiales y ahorrando dinero</p>
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
                        <p>Maximiza el espacion de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" width="300" height="200" src="build/img/blog3.jpg" alt="entra del blog">
                    </picture>
                </div>

                <div class="texto-blog">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el: <span>24/07/2024</span> por <span>Admin</span></p>
                        <p>Maximiza el espacion de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" width="300" height="200" src="build/img/blog4.jpg" alt="entra del blog">
                    </picture>
                </div>

                <div class="texto-blog">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p>Escrito el: <span>24/07/2024</span> por <span>Admin</span></p>
                        <p>Maximiza el espacion de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>

            </article>










    </main>

    <?php


incluirTemplate("footer");



?>