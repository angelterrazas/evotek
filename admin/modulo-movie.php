<?php  

$tipo = $_POST["tipo"];


if($tipo == "crear"){

     $nombre = $_POST["nombre"];

     $genero = $_POST["genero"];

     include "funciones/conn.php";

     try {
          $stmt = $conn->prepare("INSERT INTO pelicula(nombre_pelicula, genero_pelicula) VALUES(?,?)   ");
          $stmt->bind_param("ss",$nombre, $genero);
          $stmt->execute();

          if($stmt->affected_rows == 1){
               $response = array(
                    "respuesta" => "correcto"
               );
          }




     } catch (\Exception $e) {
          $response = array(
               "respuesta" => $e->getMessage()
          );
     }

     echo json_encode($response);

}


if($tipo == "editar"){

     
     $nombre = $_POST["nombre"];
     $id = $_POST["idi"];
     $genero = $_POST["genero"];

     include "funciones/conn.php";

     try {
          $stmt = $conn->prepare("UPDATE pelicula SET nombre_pelicula = ?, genero_pelicula = ? WHERE id_pelicula = ?   ");
          $stmt->bind_param("sss",$nombre, $genero, $id);
          $stmt->execute();

          

          if($stmt->affected_rows == 1){
               $response = array(
                    "respuesta" => "correcto"
               );
          }




     } catch (\Exception $e) {
          $response = array(
               "respuesta" => $e->getMessage()
          );
     }

     echo json_encode($response);
}


if($tipo == "borrar"){

     
     
     $id = $_POST["idi"];
    

     include "funciones/conn.php";

     try {
          $stmt = $conn->prepare("DELETE FROM pelicula WHERE id_pelicula = ?   ");
          $stmt->bind_param("s",$id);
          $stmt->execute();

          

          if($stmt->affected_rows == 1){
               $response = array(
                    "respuesta" => "correcto"
               );
          }




     } catch (\Exception $e) {
          $response = array(
               "respuesta" => $e->getMessage()
          );
     }

     echo json_encode($response);
}







?>