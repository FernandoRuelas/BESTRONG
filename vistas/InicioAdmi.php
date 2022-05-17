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
        
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
    </svg>
        <br>
        
        
    </head>

    <body >

    <?php    

    require("herramientas/tolavar.php");
    $navegacion= new tolvarNav();
    $navegacion->navegacionAdmi();


    ?>
    <br>

    <br>

        <div class="m-0 row justify-content-center">

            <div class="col-10 text-center" style="background-color: #e3f2fd;">
                
                <div class="container-left">

                    <div class="col-6">
                    <form action="index.php?accion=inicioAdmiControlador" method="POST" enctype="multipart/form-data" >
                        
                        <h1 class="h3 mb-3 fw-normal">Motivalos</h1>

                        <div class="form-floating">
                        
                      <textarea id="comentario"  class="form-control" name="descripcion" rows="5"></textarea>
                      
                        <label for="floatingInput">¿Que piensas?</label>
                        <br>
                        </div>
                        
                        <input type="file" class="bi bi-arrow-bar-up" class="form-control" name="imagen" placeholder="imagen">
                       
                       

                    
                        <input class="btn btn-lg btn-primary"  type="submit" value="Publicar" name="publicar">
                    
                    </form>
                    </div>
                </div>
                <br>
                <br>



                

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







    </body>

    


    <!-- ********************************
    ****** Scrips de boostrap************
    **********************************-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    </body>
    </html>