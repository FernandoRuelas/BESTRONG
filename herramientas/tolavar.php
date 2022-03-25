<?php 

class tolvarNav{

  public function Navegacion(){
    
?>


  <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar fixed-top">
        <br>

        <div class="container-fluid">
          <br>

          <a class="navbar-brand" href="#">BeStrong</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

    <?php if(isset($_GET["accion"])){?>

              <?php if($_GET["accion"]=="Inicio"):?>
                <li class="nav-item">
                  <a class="nav-link active" href="index.php?accion=Inicio">Inicio</a>
                </li>
              <?php else:?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?accion=Inicio">Inicio</a>
                </li>
              <?php endif?>

              <?php if($_GET["accion"]=="Nosotros"):?>
              <li class="nav-item">
                <a class="nav-link active" href="index.php?accion=Nosotros">Nosotros</a>
              </li>
              <?php else:?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?accion=Nosotros">Nosotros</a>
                </li>
              <?php endif?>



              <?php if($_GET["accion"]=="Registrate"):?>
              <li class="nav-item">
                <a class="nav-link active" href="index.php?accion=Nosotros">Registrate</a>
              </li>
              <?php else:?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?accion=Nosotros">Registrate</a>
                </li>
              <?php endif?>



              <?php if($_GET["accion"]=="Entrar"):?>
              <li class="nav-item">
                <a class="nav-link active" href="index.php?accion=Nosotros">Entrar</a>
              </li>
              <?php else:?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?accion=Nosotros">Entrar</a>
                </li>
              <?php endif?>


    <?php }else{?>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?accion=Inicio">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?accion=Nosotros">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?accion=Registrate">Registrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?accion=Entrar">Entrar</a>
      </li>
      <?php }?>

            
              </ul>
          </div>
        </div>
      </nav>
    





<?php 
  }
}
?>