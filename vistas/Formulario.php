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

    <form method="POST" action="index.php?accion=FormularioControlador" enctype="multipart/form-data"  >
        <br>
       
        <div  class="m-0 row justify-content-center">
            
            <div style="background-color: #e3f2fd;" class=" col-9 m-0 row justify-content-center">
                
                <label class="form-label fs-4">Describa su objetivo detalladamente</label>
                <textarea class="form-control" name="objetivo" rows="5"></textarea>
                <div id="emailHelp" class="form-text">Tu informacion es segura.</div>

                <br>
                <br>
                <div class="row">
                    
                    <div class="col-3">
                    <label  class="form-label fs-5">Estatura</label>
                    <input type="number" step="0.01" class="form-control" name="estatura">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Mts</label>
                    </div>
                    <div class="col-3" >
                    <label  class="form-label fs-5">Peso</label>
                    <input type="number" step="0.01" class="form-control" name="peso">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Kg</label>
                    </div>
                    <div class="col-3" >
                    <label  class="form-label fs-5">Edad</label>
                    <input type="number" step="0.01" class="form-control" name="edad">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Años</label>
                    </div>
                    
                    <br>
                </div>

                <br>
                <br>
                <label class="form-label fs-5">Describa las actividades que realiza en su dia</label>
                <textarea class="form-control" name="actividades" rows="5">Ejemplo soy futbolista, ademas estudio etc..</textarea>
                

                <br>
                <br>
                <label  class="form-label fs-5">Si tiene alergias favor de ponerlas aqui(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="alergias" rows="5">Ejemplo: Soy alerjico a tal medicamento, soy alerjico a tal alimento etc.. </textarea>
                   
                <div class="row">
                    
                    <div class="col-4">
                    <label  class="form-label fs-5">Hora a la que duerme</label>
                    <input type="time" class="form-control" name="horaDormir">
                    </div>
                    <div class="col-4" >
                    <label  class="form-label fs-5">Hora a la que despierta</label>
                    <input type="time" class="form-control" name="horaDespertar">
                    </div>
                   
                
                </div>

                <br>
                <br>
                <label  class="form-label fs-5">Si tiene leciones favor de ponerlas aqui.(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="lesiones" rows="5">Ejemplo: tengo lecion en mi rodilla derecha, me lecione en un partido y tengo 3 meses con el dolor</textarea>
                   
                <br>
                <br>
                <label  class="form-label fs-5">Si tiene enfermedades favor de ponerlas aqui.(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="enfermedades" rows="5">Ejemplo: soy asmatico pero estoy medicado.</textarea>
                   
                <div class="col-4" >
                    <label  class="form-label fs-5">Hora a la que entrena</label>
                    <input type="time" class="form-control" name="horaEntreno">
                </div>

                
                <br>
                <br>
                <br>
                <label  class="form-label fs-5">Si actualmente entrena, entrenaba o no entrana favor de explicarlo.</label>
                <textarea class="form-control" name="situacionGym" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                
                <br>
                <br>
                <label  class="form-label fs-5">En que lugar estara entrenando (casa o gym, de ser en casa explicar el amterial con el que cuenta).</label>
                <textarea class="form-control" name="locacionEntreno" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                
                <br>
                <br>
                <label  class="form-label fs-5">Comentario extra que quiera agregar.</label>
                <textarea class="form-control" name="comentario" rows="5"></textarea>
                
                <br>
                <br>
                <div>
                    <br>
                    
                        <label class="form-label fs-5">Subir imagenes con traje de baño o ropa deportiva que no obstrulla la visibilidad del cuerpo. </label>
                        <br>
                        <br>
                        <br>

                        <label class="form-label fs-5">Seleccione imagen de frente.</label>
                        <input type="file" name="fotoFrente" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de espaldas.</label>
                        <input type="file" name="fotoEspalda" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de uno de sus perfiles.</label>
                        <input type="file" name="fotoPerfilUno" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de su otro perfil.</label>
                        <input type="file" name="fotoPerfilDos" required /><br>
                   
                </div>

                
                <br>
                <br>
                
            
                <div class="col-3">
                    <br>
                    <input class="btn btn-lg btn-primary" type="submit" value="Enviar" name="EnviarFormulario">
                    <br>
                <br>
                <br>
                <br>
                </div>
                <br>
                <br>

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