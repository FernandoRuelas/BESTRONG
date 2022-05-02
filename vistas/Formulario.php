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
</head>



<body>
    <?php 
       require("herramientas/tolavar.php");
       $navegacion= new tolvarNav();
       $navegacion->NavegacionUsuarioLogeado();
    ?>
    <br>
    <br>
    <br>

    <div  style="background-color: #b5f5fd;" class=" m-0 justify-content-center">
                <h1 class="fs-2 text-center" for="text">Tu informacion esta segura con nostros. </h1>
                <br>
                <br>
                <p class="fs-4 text-center"> LLena este formulario y envialo, asi tu entranador podra armar tu plan personalizado. </p>
                <br>
                <br>
                <p class="fs-4 text-center"> La informacion debe ser real, recuerda estos datos son nesesario para poder lograr tu objetivo. </p>
                <br>
                <br>


    </div>

 
            <div>
                <form action="prueba.php" method="POST"  enctype="multipart/form-data" >

                    <input type="file" name=img>
                    <input class="btn btn-lg btn-primary" type="submit" value="Enviar" name="enviarimg">



                </form>

            </div>
                


        
           
    
                   
          
           <br>
           <br> 
        </div>
       


        <br>
           <br>
           <br>
           <br>
    </form>



 <!-- ********************************
****** Scrips de boostrap************
**********************************-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>




</html>