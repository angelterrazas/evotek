<?php  

include "admin/funciones/conn.php";

$inicio = $_POST["inicio"];
$final = $_POST["final"];

try {
     $stmt = $conn->prepare('SELECT nombre_pelicula , COUNT(*) FROM renta WHERE fecha BETWEEN ? AND ? GROUP BY nombre_pelicula');
     $stmt->bind_param("ss",$inicio, $final);
     $stmt->execute();

     $stmt->bind_result($nombre_pelicula, $count);
     $stmt->fetch();

     $response = array(
          "cuc" => "yes",
          "respuesta" => $nombre_pelicula,
          "res" => $count
     );

     


} catch (\Throwable $th) {
     $response = array(
          "respuesta" => $e->getMessage()
     );
}

echo json_encode($response);



?>