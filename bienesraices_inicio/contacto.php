<?php

require 'includes/templates/funciones.php';
incluirTemplate("header"); 



?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" width="300" height="320" src="build/img/destacada3.jpg" alt="img contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>


        <form class="formulario">

            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail</label>
                <input type="emal" name="" id="email" placeholder="Tu E-mail">

                <label for="telefono">Teléfono</label>
                <input type="tel" name="" id="telefono" placeholder="Número de teléfono">

                <label for="Mensaje">Mensaje:</label>
                <textarea name="" id="Mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="v-c">Vende o Compra</label>
                <select  id="v-c">
                    <option value="" disabled>---SELECCIONA--</option>
                    <option value="COMPRAR">Comprar</option>
                    <option value="VENDER">Vender</option>
                </select>

                <label for="presupuesto">Presupuesto</label>
                <input type="number" name="" id="presupuesto" placeholder="Ingresa tu presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="telefono-2">Teléfono</label>
                    <input type="radio" id="telefono-2" name="contactar" checked value="telefono">
                    <label for="email-2">E-MAIL</label>
                    <input type="radio" id="email-2" name="contactar" value="email">
                </div>

                <p>Si eligió teléfon, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="">
                <label for="hora">Hora</label>
                <input type="time" id="hora" name="" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">




        </form>
















    </main>

<?php

incluirTemplate("footer");



?>