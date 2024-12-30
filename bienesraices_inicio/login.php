<?php
session_start();




//IMPORTAR LA BASE DE DATOS
require "includes/confi/database.php";
$db = conectarDB();

$errores = [];
//AUNTENTICAR AL USUARIO

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    /* var_dump($_POST); */


    $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (!$email) {
        $errores[] = "Ingresa un email valido";
    }
    if (!$password) {
        $errores[] = "Ingresa tu contraseña";
    }


    if(empty($errores)) {

        //REVISAR SI EL USUARIO EXISTE//
        $QUERY = "SELECT * FROM usuarios WHERE  email = '$email'";
        $resultado = mysqli_query($db, $QUERY);
        $row = mysqli_fetch_assoc($resultado);

        if($resultado->num_rows) {

            $auth = password_verify($password, $row["password"]);


            if($auth) {
                //autenticando al usuario
                

                $_SESSION["usuario"] = $row["email"];
                $_SESSION["login"] = true;

                header('Location: /bienesraices_inicio/admin');

            
                



            }
            else {
                $errores[] = "la contraseña es incorrecta";
           
                
                
            }

        }else {
            $errores [] = "el usuario no existe";
            session_destroy();
            
        }

    }
    else {
        
    }
}

require "includes/templates/funciones.php";
incluirTemplate("header");





?>


<main class="contenedor seccion">
    <h1>INCIAR SESIÓN</h1>
    <?php foreach ($errores as $error) { ?>
        <p class="alerta error">
            <?php echo $error; ?>
        </p>

    <?php }; ?>


    <form method="POST" class="formulario contenido-centrado">
        <fieldset>
            <legend>Email el Password</legend>



            <label for="email">E-mail</label>
            <input type="emal" name="email" id="email" placeholder="Tu E-mail" >

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Tu contraseña" >


        </fieldset>

        <input type="submit" value="Inciar Sesión" class="boton boton-verde">

    </form>

</main>


<?php
incluirTemplate("footer");
?>