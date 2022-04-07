
<!doctype html>
<html lang="en">
  


<head>
   

  <!-- ********************************
****** Scrips de css boostrap********
**********************************-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
<?php 
require("herramientas/tolavar.php");
      $navegacion= new tolvarNav();
      $navegacion->Navegacion();

?>
    
    
  </head>
  <body class="text-center">
    <br>
    <br>
    <br>
    
<main class="form-signin">
  <div class="container col-3">
  <form action="#" method="POST">
    <img class="mb-4" src="imagenes/BESTRONG.jpeg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Porfavor inicia secion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="flotanteCorreo" placeholder="name@example.com">
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="flotanteContraseña" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuerdame
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="Entrar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Bestrong</p>
  </form>
  </div>
</main>


<!-- ********************************
****** Scrips de boostrap************
**********************************-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
    
  </body>
</html>