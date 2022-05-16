<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" cal-scale=1.0">
    <title>Document</title>

        <!-- ********************************
****** Scrips de css boostrap********
**********************************-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
       <br>
</head>


<body>
    <?php    

    require("herramientas/tolavar.php");
    $navegacion= new tolvarNav();
    $navegacion->NavegacionUsuarioLogeado();



    ?>
    <br>
    <?php 

    if(!isset($_SESSION['userNombre'])) {
        session_start();
    }


    ?>
    <br>
  
    
    <div class="row">

        <div class="col-3">

            <h1 class="fs-2" style="color:#0000ff;">Bienvenido <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userNombre'];} ?></h1>
             
        </div>

    </div>
    

    <br>
    <br>

    <div class="row"> 
        <div class="col-5" >
                
            
            <button name="formulario" class="btn btn-block btn-primary "  data-bs-toggle="modal" data-bs-target="#modalFormulario">
                <h4>Pulsa aqui para llenar tu formulario del mes. Asi tu entrenador podra encargarse de tu plan</h4>
            </button>
            
        </div>
        <div class="col-1">

        </div>

        <div class="col-5">

            <h1>Plan del mes</h1>
            <input type="submit" name="obtenerPlan" class="btn btn-block btn-secondary" value="Actualizar" src="index.php?=PerfilUsuario">
            <?php 
             // include("coneccion/db_bestrong.php");
           // $a=$_SESSION["userId"];
               //hacemos consulta para obtener la fecha
               //$querySelectPlan = "SELECT * FROM copiaPlanes WHERE idUsuario = $a" ;

               //ejecutamos el query
              // $resQueryPlan = mysqli_query($connLocalhost, $querySelectPlan) or trigger_error("Algun dato es incorrecto");
            
            ?>
             <?php 

             
            // if (empty($resQueryPlan)) {
            //     echo "Su plan aun no esta disponible";
            // }else {
                 
             
             
            // while ($fila = mysqli_fetch_array($resQueryPlan, MYSQLI_BOTH)) {?>
                          <tr>

                            
                            <td><?php //echo $fila['fecha']?></td>
                            <td><?php //echo  $fila['descripcion']?></td>
                            <td><?php //echo $fila['media']?></td>
                            <td><?php //echo $fila['media2']?></td>
                        

                            </tr>

                
             <?php // }}?>
                            <br>
                            <br>
                    
                        </tbody>

      
                    
            
        </div>

    </div>



    <?php 
    include("coneccion/db_bestrong.php");
    $id=$_SESSION['userId'];

    ?>
    <br>
    <br>
    <br>

    

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
                        
                    
                        <td><h3><?php echo $fila["fecha"]?></h3 > <img  width="250px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($fila['fotoFrente'])?>"></td>
                        <td><br><br><img  width="250px" height="250px" src="data:image/jpg;base64,<?=base64_encode($fila['fotoEspaldas'])?>"></td>
                        <td><br><br><img  width="250px" height="250px" src="data:image/jpg;base64,<?=base64_encode($fila['fotoPerfilUno'])?>"></td>
                        <td><br><br><img  width="250px" height="250px" src="data:image/jpg;base64,<?=base64_encode($fila['fotoPerfilDos'])?>"></td>

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




    
 <!-- ********************************
****** Scrips de boostrap************
**********************************-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>


</html>