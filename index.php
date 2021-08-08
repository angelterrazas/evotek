<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Evotek</title>
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
     <header>

          <div class="logo">
               <img src="img/evotek.jpg" alt="">
          </div>

          <div class="user">
          <a href="admin/admin-area.php"> <i class=" user-i fas fa-user"></i> </a>
          </div>

     </header>

     <div class="gray">
          <section class="container">
               <h3 class="action-h2">Action</h3>
               <div class="scroll">



                    

                    <?php  
                    include "admin/funciones/conn.php";
                    try {
                         $res = $conn->query("SELECT * FROM pelicula WHERE genero_pelicula = 'accion'");
                         
                    } catch (\Exception $e) {
                         echo $e->getMessage();
                    }
                    
                    while($re = $res->fetch_assoc()){ ?>
                         <div class="peli" data-nombre="<?php echo $re["nombre_pelicula"] ?>"  data-id="<?php echo $re["id_pelicula"] ?>">
                              <p><?php echo $re["nombre_pelicula"] ?></p>
                              
                         </div>



                    
                    <?php  
                    }
                    ?>





                    
               </div>
          </section>

          <section class="container">
               <h3 class="action-h2">Drama</h3>
               <div class="scroll">


               <?php  
                    include "admin/funciones/conn.php";
                    try {
                         $res = $conn->query("SELECT * FROM pelicula WHERE genero_pelicula = 'drama'");
                         
                    } catch (\Exception $e) {
                         echo $e->getMessage();
                    }
                    
                    while($re = $res->fetch_assoc()){ ?>
                         <div class="peli" data-nombre="<?php echo $re["nombre_pelicula"] ?>"  data-id="<?php echo $re["id_pelicula"] ?>">
                              <p><?php echo $re["nombre_pelicula"] ?></p>
                              
                         </div>



                    
                    <?php  
                    }
                    ?>
                    





               </div>
          </section>

          <section class="container">
               <h3 class="action-h2">Animation</h3>
               <div class="scroll">

               <?php  
                    include "admin/funciones/conn.php";
                    try {
                         $res = $conn->query("SELECT * FROM pelicula WHERE genero_pelicula = 'animacion'");
                         
                    } catch (\Exception $e) {
                         echo $e->getMessage();
                    }
                    
                    while($re = $res->fetch_assoc()){ ?>
                         <div class="peli" data-nombre="<?php echo $re["nombre_pelicula"] ?>"  data-id="<?php echo $re["id_pelicula"] ?>">
                              <p><?php echo $re["nombre_pelicula"] ?></p>
                              
                         </div>



                    
                    <?php  
                    }
                    ?>


                    
               </div>
          </section>

          <br>
          <br>
          <br>
          
          <section class="container">
               <p class="centerr">¿Cuántas veces se rentó una pelicula en un rango de fechas?</p>
               <div class="center">
                    <form action="modelo-renta.php" method="post" id="form-renta">
                    <input type="date" id="entrada" class="datee" >
                    <input type="date" id="salida" class="datee">
                    <div class="clis">
                         <input type="submit" value="Calcular" class="sink">
                    </div>
                    </form>
               </div>
          </section>

          



     </div>

     

          

     


     <script src="js/sweetalert2.all.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>