<?php 
  include "templates/header.php" ;
  include "templates/barra.php";
  include "templates/navegacion.php";

$idd = $_GET["id"];

include "funciones/conn.php";

try {
     $resultado = $conn->query("SELECT * FROM pelicula WHERE id_pelicula = $idd");
} catch (\Exception $e) {
     echo "Error" . $e->getMessage() . "</br>";
}
$res = $resultado->fetch_assoc();

?>





  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit movies</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-body">
          <form method="post" id="editar-movie-form" action="modulo-movie.php">
               <div>
               <label for="pelicula">Nombre Pelicula</label>
               </div><div>
               <input type="text" name="pelicula" id="pelicula" placeholder="pelicula" value="<?php echo $res["nombre_pelicula"] ?>">
               </div>
               <br>

               <div>
               <label for="pelicula">Genero</label>
               </div><div>
               <select name="gene" id="gene">
                    <option  disabled >-- Seleccione --</option>

                    <?php 
                    if($res["genero_pelicula"] == "animacion"){
                    ?>
                    <option default value="animacion">Animacion</option>
                    <option  value="drama">Drama</option>
                    <option  value="accion">Acción</option>
                    <?php 
                    }
                    ?>


                    <?php 
                    if($res["genero_pelicula"] == "drama"){
                    ?>
                    <option default value="drama">Drama</option>
                    <option  value="animacion">Animacion</option>
                    <option  value="accion">Acción</option>
                    <?php 
                    }
                    ?>

                    <?php 
                    if($res["genero_pelicula"] == "accion"){
                    ?>
                    <option default value="accion">Acción</option>
                    <option  value="animacion">Animacion</option>
                    <option  value="drama">Drama</option>
                    <?php 
                    }
                    ?>

                    





                    
                    
                    
               </select>
               </div>
               <br>

               <div>
                    <input type="hidden" name="tipo" value="editar" id="tipoo">
                    <input type="hidden" name="idi" id="idi" value="<?php echo $res["id_pelicula"]?>" >
                    <input type="submit" value="Editar">
               </div>
               


          </form>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include "templates/footer.php";
  ?>

 

