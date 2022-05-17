<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" cal-scale="1.0">
    <title>Document</title>

        <!-- ********************************
****** Scrips de css boostrap********
**********************************-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
       <br>
</head>


<body>

  
   <div class="container col-12">
    <div class="row">

        <div class="col-3">
            <?php 

                include("coneccion/db_bestrong.php");
                $id=$_POST['verFotos'];

                $queryUsuario="SELECT * FROM Usuario WHERE idUsuario = $id";
               


                $resQueryUsuario=mysqli_query($connLocalhost, $queryUsuario) or trigger_error("Algun dato es incorrecto");

                $nombre=mysqli_fetch_assoc($resQueryUsuario);
                $nombre1=$nombre["nombre"];
            
            ?>

            <br>
            <br>

            <h1 class="fs-2" style="color:#0000ff;"><?php if (isset($_POST['verFotos'])) {echo $nombre1;} ?></h1>
             
        </div>

    </div>
    

    <br>
    <br>

   



    <?php 
   

    ?>

   

    

    <!--prueba 2!-->


    <?php 
    
    $queryF= "SELECT * FROM Formularios WHERE idUsuario= $id" ;

    //ejecutamos el query
    $resQueryF = mysqli_query($connLocalhost, $queryF) or trigger_error("Algun dato es incorrecto");
  
       
    
    ?>
    <div class="container-left">
        <div class="row">
            <div class="col-4">
                <table class="table">

                
                    
                
                    <tbody>
                        <?php while ($fila = mysqli_fetch_array($resQueryF, MYSQLI_BOTH)) {?>
                        <tr>
                        
                    
                        <td><h3><?php echo $fila["fecha"]?></h3 > <img width="250px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($fila['fotoFrente']);?>"></td>
                        <td><br><br><img width="250px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($fila['fotoEspaldas']);?>"></td>
                        <td><br><br><img width="250px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($fila['fotoPerfilUno']);?>"></td>
                        <td><br><br><img width="250px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($fila['fotoPerfilDos']);?>"></td>

                        </tr>
                        <?php }?>
                        <br>
                        <br>
                    
                    </tbody>

                </table>
            
            </div>
            <div class="col-4">
                 </div>

        


        </div>

    </div>



</div> 
    
 <!-- ********************************
****** Scrips de boostrap************
**********************************-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>


</html>