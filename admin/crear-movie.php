<?php 
  include "../s.php" ;
  include "templates/header.php" ;
  include "templates/barra.php";
  include "templates/navegacion.php";
?>



  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add movies</h1>
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
          <form method="post" id="crear-movie-form" action="modulo-movie.php">
               <div>
               <label for="pelicula">Nombre Pelicula</label>
               </div><div>
               <input type="text" name="pelicula" id="pelicula" placeholder="pelicula">
               </div>
               <br>

               <div>
               <label for="pelicula">Genero</label>
               </div><div>
               <select name="gene" id="gene">
                    <option   default>-- Seleccione --</option>
                    <option value="animacion">Animacion</option>
                    <option value="drama">Drama</option>
                    <option value="accion">Acción</option>
               </select>
               </div>
               <br>

               <div>
                    <input type="hidden" name="tipo" value="crear" id="tipoo">
                    <input type="submit">
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

 

