<?php

require "../includes/templates/funciones.php";

if(!estaAutenticado()) {
        header('Location: /bienesraices_inicio');
}

//BASE DE DATOS, IMPORTAR LA CONEXION
require "../includes/confi/database.php";
$db = conectarDB();




//CREAR LA QUERY//
$consulta = "SELECT * FROM propiedades;";

//MANDAR LA QUERY A LA BASE DE DATOS//
$QUERY = mysqli_query($db, $consulta);




$resultado = $_GET["resultado"] ?? null;



if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        
        if($id) {
                $query = "SELECT imagen FROM propiedades WHERE id = $id";
                $consulta = mysqli_query($db, $query);
                $resultado = mysqli_fetch_assoc($consulta);

                unlink("../imagenes/". $resultado["imagen"]);



                $query  = "DELETE FROM propiedades WHERE id = $id";
                
                $resultado = mysqli_query($db, $query);

                if($resultado) {
                        header('Location: /bienesraices_inicio/admin?resultado=4');
                }
        }


}

incluirTemplate("header");

?>


<main class="contenedor seccion">
        <!--ESTATUS DE PETICIONES-->
        <?php if (intval($resultado) === 1) { ?>
                <p class="alerta correcto">Propiedad creada correctamente</p>



        <?php } elseif(intval($resultado) === 2) { ?>
                <p class="alerta correcto">actualizado correctamente</p>

        <?php }elseif (intval($resultado) === 3){ ?>
                <p class="alerta fallido">erro al procesar la solicitud</p>
        <?php } elseif (intval($resultado) === 4){ ?>
                <p class="alerta fallido">eliminado correctamente</p>
        <?php }  ?> 




        <h1>Administrador de Bienes Raices</h1>
        <a class="boton-verde" href="/bienesraices_inicio/admin/propiedades/crear.php">Nueva Propiedad</a>

        <table class="propiedades">
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                        </tr>
                </thead>

                

                


                <tbody><!-- MONSTRANDO LOS RESULTADOS-->
                <?php while($row = mysqli_fetch_assoc($QUERY)) { ?>
                        <tr>
                                <td><?php echo $row["id"]?></td>
                                <td><?php echo $row["titulo"]?></td>
                                <td> <img src="/bienesraices_inicio/imagenes/<?php echo $row["imagen"];?>" alt="imagen tabla" class="img-tabla"></td>
                                <td>$<?php echo $row["precio"]?></td>
                                <td>
                                        <form method="POST" class="w-100">
                                        <input type="submit" class="boton boton-rojo-block" value="eliminar">
                                                <input type="hidden" name="id" value="<?php echo $row["id"];  ?>">
                                                
                                        </form>

                                        <a href="/bienesraices_inicio/admin/propiedades/actualizar.php?id=<?php echo $row["nombre"]?>" class="boton boton-azul-block">Actualizar</a>
                                </td>
                        </tr>
                        <?php } ?>
                </tbody>

                
        </table>

</main>


<?php

//CERRAR LA BASE DE DATOS OPCIONAL ///
mysqli_close($db);
incluirTemplate("footer");
?>