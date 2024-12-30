<?php


$last_check_time = isset($_POST['last_check_time']) ? $_POST['last_check_time'] : '1970-01-01 00:00:00';





require "../includes/templates/funciones.php";


//BASE DE DATOS, IMPORTAR LA CONEXION
require "../includes/confi/database.php";
$db = conectarDB();




//CREAR LA QUERY//
$consulta = "SELECT * FROM propiedades;";








if ($_SERVER["REQUEST_METHOD"] === "POST") {  // Aquí usamos "==" para comparar


    //MANDAR LA QUERY A LA BASE DE DATOS//
    $query  = "SELECT last_update FROM propiedades WHERE last_update = $last_check_time";
    $QUERY = mysqli_query($db, $consulta);
    




    $data = array();
    while($row = mysqli_fetch_assoc($QUERY)) {
        $data[] = $row;    
    }

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // Respuesta en caso de método incorrecto o datos incorrectos
    http_response_code(400);  // 400 Bad Request
    echo json_encode(array("status" => "error", "message" => "Solicitud inválida o datos incorrectos"));
}

?>