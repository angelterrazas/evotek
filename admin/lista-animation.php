<?php 
  
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
            <h1>Pivot doors</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                  <th>Nombre</th>
                    <th>Genero</th>
                    <th>Accion</th>

                    
                  </tr>
                  </thead>

                  <?php include "funciones/conn.php"; 

try {
  $resultado = $conn->query("SELECT * FROM pelicula WHERE genero_pelicula = 'animacion'");
} catch (\Exception $e) {
  $response = array(
    "respuesta" => $e->getMessage()
  );
}
                  
                  
                  ?>

                  <tbody class="pivot-tbody">
                  <?php while($res = $resultado->fetch_assoc()){ ?>
                      
                       
                      <tr>
                           <td><?php echo $res["nombre_pelicula"] ?></td>
                           <td><?php echo $res["genero_pelicula"] ?></td>
                           
                           <td><a  href="editar-movie.php?id=<?php echo $res["id_pelicula"] ?>"><i class="fds far fa-edit"></i></a>    <i data-id="<?php echo $res["id_pelicula"] ?>" class="fas fa-trash-alt fds" ></i></td> 
                      </tr>
                      


                    <?php } ?>


                  
                  
                  </tbody>

                  


                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
  <script src="js/app.js"></script>
  <?php 
    include "templates/footer.php";
  ?>