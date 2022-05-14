


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- ********************************
****** Scrips de css boostrap********
**********************************-->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
       <br>

       <style>
          
           
          .table-striped tbody{
               height: 230px;
               overflow-y: auto;
               margin: auto;
               width: 100%;
               
           }
           .table-striped thead,
           .table-striped  tbody,
           .table-striped  td,
           .table-striped  th{
               display: block;
           }

           .table-striped  tbody td,
           .table-striped  thead > tr > th{
               float: left;
               border-bottom-width: 0;
           }
       </style>
         <style>
          
           
          .table-hover tbody{
               height: 230px;
               overflow-y: auto;
               margin: auto;
               width: 100%;
               
           }
           .table-hover thead,
           .table-hover  tbody,
           .table-hover  td,
           .table-hover  th{
               display: block;
           }

           .table-hover  tbody td,
           .table-hover  thead > tr > th{
               float: left;
               border-bottom-width: 0;
           }
       </style>

</head>


<body>
    <?php    

    require("herramientas/tolavar.php");
    $navegacion= new tolvarNav();
    $navegacion->navegacionAdmi();



    ?>
    <br>
    <?php 

    if(!isset($_SESSION['userNombre'])) {
        session_start();
    }
    //incluimos la BD
   include("coneccion/db_bestrong.php");
    

      // Armamos el query 
    $queryLClientes = "SELECT * FROM Usuario WHERE estado = 'activo' AND tipoUser = 'cliente' ";
    
    // Ejecutamos el query
    $resQueryClietnes = mysqli_query($connLocalhost, $queryLClientes) or trigger_error("Algun dato es incorrecto");

    $total=mysqli_num_rows($resQueryClietnes);

       // Armamos el query 
       $queryLForm = "SELECT * FROM copiaFormulario ";
    
       // Ejecutamos el query
       $resQueryForm= mysqli_query($connLocalhost, $queryLForm) or trigger_error("Algun dato es incorrecto");
   
      
      

    ?>
    <br>
  
    
    <div class="row">

        <div class="col-3">

            <h1 class="fs-2" style="color:#0000ff;">Bienvenido <?php if (isset($_SESSION['userId'])) {echo $_SESSION['userNombre'];} ?></h1>
             
        </div>

    </div>
    <BR>
    </BR>
    <BR>
    </BR>
  

    <div class="container">

        <div class="row">


                <div  class="col-9" style="background-color:#e3f2fd" >
                    <h3 >Pendientes</h3>
                    <table  class="table table-striped  ">
                        <thead>
                            <tr style="width:900px">
                        
                            <th style="width:35px" scope="col">ID</th>
                            
                            <th style="width:200px" scope="col">Fecha</th>
                            <th style="width:250px" scope="col">Nombre</th>
                            <th style="width:245px" scope="col">Telefono</th>
                            <th style="width:150" scope="col">Formulario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($fila = mysqli_fetch_array($resQueryForm, MYSQLI_BOTH)) {?>
                            <tr>

                            <?php  
                            $id=$fila['idUsuario2'];
                        
                            
                            //query
                        
                            $queryUsuario = "SELECT * FROM Usuario WHERE idUsuario= $id ";
        
                            // Ejecutamos el query
                            $resQueryUsuario= mysqli_query($connLocalhost, $queryUsuario) or trigger_error("Algun dato es incorrecto");

                                $datos=mysqli_fetch_assoc($resQueryUsuario);
                                $nombre=$datos["nombre"];
                                $telefono=$datos["telefono"];

  

                                // Armamos el query 
                                $queryForm= "SELECT * FROM copiaFormulario WHERE idUsuario2 = $id ";

                                // Ejecutamos el query
                                $resQueryForm = mysqli_query($connLocalhost, $queryForm) or trigger_error("Algun dato es incorrecto");

                                $datos= mysqli_fetch_assoc($resQueryForm);  
                                
                                $datosForm= $datos["fecha2"]."||".
                                $datos["objetivo2"]."||".
                                $datos["estatura2"]."||".
                                $datos["peso2"]."||".
                                $datos["actividades2"]."||".
                                $datos["alergias2"]."||".
                                $datos["edad2"]."||".
                                $datos["horaDormir2"]."||".
                                $datos["horaDespertar2"]."||".
                                $datos["lesiones2"]."||".
                                $datos["enfermedades2"]."||".
                                $datos["locacionEntreno"]."||".
                             
                                $datos["comentario"]."||".
                                $datos["horaEntreno"];

                                
                               

                                
                                                                                                            

                            ?>
                            
                            
                            <td style="width:35px" ><?php echo $fila['idUsuario2']?></td>
                            <td style="width:200px" ><?php echo $fila['fecha2']?></td>
                            <td style="width:250px"><?php echo  $nombre?></td>
                            <td style="width:250px"><?php echo $telefono?></td>
                            <td style="width:150px"><button  class="btn-primary" data-bs-toggle="modal"  data-bs-target="#modalMostrarForm" onclick="mostrarDatos(<?php echo $id ?>)" >Acceder</button></td>
                            <!--data-bs-toggle="modal"  data-bs-target="#modalMostrarForm"
                            -->
                            </tr>
                            <?php }?>
                            <br>
                            <br>
                    
                        </tbody>
                    </table>
                                    

                </div>
                

                




            </div>
            <div class="row"> 
                <br>
                <br>
            </div>

        

            <div class="row">

            <div class="col-9" style="background-color:#e3f2fd">
                <h3 >Clientes Activos</h3> <p>Total: <?php echo $total;?></p>
                    <table class="table  table-hover">
                        <thead>
                            <tr style="width:550px">
                        
                            <th style="width:35px" scope="col">ID</th>
                            <th style="width:250px" scope="col">Nombre</th>
                            <th style="width:250px" scope="col">Telefono</th>
                            
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while ($fila = mysqli_fetch_array($resQueryClietnes, MYSQLI_BOTH)) {?>
                            <tr>
                            
                        
                            <td style="width:35px" ><?php echo $fila['idUsuario']?></td>
                            <td style="width:250px"><?php echo $fila['nombre']?></td>
                            <td style="width:250px"><?php echo $fila['telefono']?></td>
                        

                            </tr>
                            <?php }?>
                            <br>
                            <br>
                    
                        </tbody>
                    </table>
                    

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