<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!-- ********************************
****** Scrips de css boostrap********
**********************************-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
       <br>
       
       
</head>

<body >

<?php    

require("herramientas/tolavar.php");
$navegacion= new tolvarNav();
$navegacion->NavegacionUsuarioLogeado();


 ?>
 <br>

 <br>

     <div class="m-0 row justify-content-center">

        <div class="col-9 text-center" style="background-color: #e3f2fd;">
        <div>
        <div>
                        <?php 
                        include("coneccion/db_bestrong.php");
                         $queryP= "SELECT * FROM Post" ;

                         //ejecutamos el query
                         $resQueryP = mysqli_query($connLocalhost, $queryP) or trigger_error("Algun dato es incorrecto");

                        ?>
                       
                            <div class=" container-center">
                                <div class="col-10 text-center">

                            <?php 
                          while ($fila = mysqli_fetch_array($resQueryP, MYSQLI_BOTH)) {

                            $id=$fila['idUsuarioPost'];
                            $queryU= "SELECT * FROM Usuario WHERE idUsuario = $id" ;

                            //ejecutamos el query
                            $resQueryU = mysqli_query($connLocalhost, $queryU) or trigger_error("Algun dato es incorrecto");
                            $datosUsuario= mysqli_fetch_assoc($resQueryU); ?>

                           
                                <div class="col-12 text-center">
                        
                                    <h4 style="color: blue;"> <?php  echo $datosUsuario['nombre'];?></h4>
                                    <p><?php echo $fila['descripcionPost'];?></p>
                                     <img width="350px" height="350px" src="data:image/jpg;base64,<?php echo base64_encode($fila['archivo']);?>">
                                    <p><?php echo $fila["fechaPost"];?> </p>
                                </div>
                           
    
                         <?php }?> 
                                              
                        
                      


                    </div>
                           
    
                       
                                              
                        
                      


                    </div>


        </div>

    </div>







</body>

  


<!-- ********************************
****** Scrips de boostrap************
**********************************-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>