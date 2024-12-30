<?php
require "../../includes/templates/funciones.php";

if(!estaAutenticado()) {
        header("Location: /bienesraices_inicio");
}

//BASE DE DATOS
require "../../includes/confi/database.php";
$db = conectarDB();


//CONSULTA PARA TRAER A LOS VENDEDORES//
$consulta = "SELECT * FROM vendedores;";
$resultado = mysqli_query($db, $consulta);



$titulo = "";
$precio = "";
$descripcion ="";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedores_id = "";

$creado = date("Y/m/d");

//ARREGLO CON ERRORES
$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

 



        //GUARDADO LOS INPUTS DEL ADMIN EN LA QUERY
        $titulo = mysqli_real_escape_string ($db, $_POST["titulo"]);
        $precio = mysqli_real_escape_string ( $db, $_POST["precio"]);
        $descripcion = mysqli_real_escape_string ($db, $_POST["describcion"]);
        $habitaciones = mysqli_real_escape_string ($db, $_POST["habitaciones"]);
        $wc = mysqli_real_escape_string ($db, $_POST["wc"]);
        $estacionamiento = mysqli_real_escape_string ($db, $_POST["estacionamiento"]);
        $vendedores_id = mysqli_real_escape_string ($db, $_POST["vendedor"]);
        $imagen = $_FILES["imagen"];

       


        //VALIDACIONES DE LOS INPUTS//

        if (!$titulo) {
                $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
                $errores[] = "El precio es obligatorio";
        }

        if (strlen($descripcion) < 50) {
                $errores[] = "La descripción es obligatoria y debe contener por lo menos 50 caracteres";
        }

        if (!$habitaciones) {
                $errores[] = "La cantidad de habitaciones es obligatoria";
        }

        if (!$wc) {
                $errores[] = "Ingresa el número de baños";
        }

        if (!$estacionamiento) {
                $errores[] = "El número de estacionamintos es obligatorios";
        }

        if (!$vendedores_id) {
                $errores[] = "Ingresa el nombre del vendedor";
        }



        
        if(!$imagen["name"] || $imagen["error"]) {
                $errores[] = "Imagen obligatoria";
        }


        //Revisar que el arreglo de errores este vacio
        if (empty($errores)) {


                //SUBIDA DE ARCHIVOS//


                //GENERAR NOMBRE UNICO PARA CADA IMAGEN//
                $nombreImagen = md5( uniqid( rand(), true) ) . ".jpg";
                /* var_dump($nombreImagen); */

                //GENERARAR CARPETA
                $carpteImagenes =  '../../imagenes/';
                //sin no existe la crea y si existe no hace nada
                if(!is_dir($carpteImagenes)) {
                        mkdir($carpteImagenes);
                }
                //SUBIR IMAGEN A UNA CARPETA EN LA EL SERVIDOR NO A DB
                move_uploaded_file($imagen["tmp_name"], $carpteImagenes.$nombreImagen );


                //QUERY PARA PROPIEDADES//
                $query = "INSERT INTO propiedades(usuario, imagen, fecja) VALUES('$titulo',$precio, '$nombreImagen', '$descripcion',$habitaciones,$wc, $estacionamiento, '$creado', $vendedores_id);";

                

                //Insetar en la base de datos

                $resultado = mysqli_query($db, $query);


                //REDIGIR A USUARIO
                if ($resultado) {
                        header('Location: /bienesraices_inicio/admin?resultado=1');
                }
                else {
                        header('Location: /bienesraices_inicio/admin?resultado=3');
                }
        }

}






incluirTemplate("header");





?>


<main class="contenedor seccion">
        <h1>Crear</h1>

        <?php foreach($errores as $error) {?>
                <p class="alerta error">
               <?php echo $error; ?>
               </p>

        <?php };?>


        <a class="boton boton-verde" href="/bienesraices_inicio/admin">Volver</a>
        <form class="formulario" action="/bienesraices_inicio/admin/propiedades/crear.php" method="POST" enctype="multipart/form-data">

                <fieldset>
                        <legend>Información general</legend>

                        <label for="titulo">Titulo:</label>
                        <input type="text" id="titulo" placeholder="Titulo de la propiedad" name="titulo" value="<?php  echo $titulo;?>">

                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" placeholder="Precio de la propiedad" name="precio" value="<?php  echo $precio;?>">

                        <label for="imagen">Imagen:</label>
                        <input type="file" id="imagen" accept="image/jpg, image/png" name="imagen">

                        <label for="describcion">Describción:</label>
                        <textarea id="describcion" name="describcion"><?php  echo $descripcion;?></textarea>
                </fieldset>


                <fieldset>
                        <legend>Información de la propiedad</legend>

                        <label for="habitaciones">Habitaciones:</label>
                        <input type="number" id="habitaciones" placeholder="eje: 3" min="1" max="9" name="habitaciones" value="<?php  echo $habitaciones;?>">

                        <label for="baños">Baños:</label>
                        <input type="number" id="baños" placeholder="eje: 3" min="1" max="9" name="wc" value="<?php  echo $wc;?>">

                        <label for="estacionamiento">Estacionamiento:</label>
                        <input type="number" id="estacionamiento" placeholder="eje: 3" min="1" max="9" name="estacionamiento" value="<?php  echo $estacionamiento;?>">
                </fieldset>

                <fieldset>
                        <legend>Vendedor</legend>
                        <select name="vendedor">
                        <option value="">--SELECCIONAR VENDEDOR</option>
                               <?php while($row = mysqli_fetch_assoc($resultado)) {?>

                                <option  <?php echo ($vendedores_id === $row["id"]) ? "selected" : ""; ?> name="nombre"  value="<?php echo $row["id"]; ?>" name="nombre"> <?php echo $row["nombre"]." ". $row["apellido"]; ?>   </option>

                               <?php } ?>
                        </select>
                </fieldset>
                <input type="submit" Value="Crear propiedad" class="boton boton-verde">



        </form>

</main>


<?php
incluirTemplate("footer");
?>