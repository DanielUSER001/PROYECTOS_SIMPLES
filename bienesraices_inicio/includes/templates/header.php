
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="/bienesraices_inicio/build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio ? "inicio" : "" ?>">
        <div class="contenido-header">
            <div class="barra">

                <a href="/bienesraices_inicio/index.php"> <img loading="lazy" width="100" height="50" src="/bienesraices_inicio/build/img/logo.svg" alt="logo"></a>


                <div class="paraEspacio"></div>

                <div class="menu_right">


                    <div class="mobile-menu">
                        <img src="/bienesraices_inicio/build/img/barras.svg" alt="icono menu">
                    </div>



                    <nav class="navegacion">
                        <a href="/bienesraices_inicio/nosotros.php">Nosotros</a>
                        <a href="/bienesraices_inicio/anuncios.php">Anuncios</a>
                        <a href="/bienesraices_inicio/blog.php">BLog</a>
                        <a href="/bienesraices_inicio/contacto.php">Contacto</a>
                        <a href="/bienesraices_inicio/login.php">Login</a>
                        <?php if(estaAutenticado()) { ?> <a class="cerrar-sesion" href="/bienesraices_inicio/cerrar-sesion.php"> <?php echo "Cerrar Sesión"  ?> </a>

                        <?php } ?>

                       
                        <div class="contenedor-dark-img">
                            <img class="dark-mode-boton" src="/bienesraices_inicio/build/img/dark-mode.svg" alt="icono darkmode">
                        </div>




                    </nav>



                </div>



            </div><!--CIERRE BARRA DE NAVEGACION-->
            <?php if ($inicio) {  ?>

                <h1>Venta de Casas y Departamentos<br>Exclusivos de Lujo</h1>
            <?php } ?>


        </div>
    </header>