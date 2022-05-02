<html>
    <head>
       
        <title>BESTRONG</title>

        
<!-- ********************************
****** Scrips de css boostrap********
**********************************-->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
        <br>

        
    </head>

    <body >

    
<main>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/BESTRONG.jpeg" class="d-block w-100" alt="..." width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nosotros te ayudamos a conseguir tu mejor vercion. Tu cambio nos interesa</h5>
        <p>Se parte del equipo</p>
        <p><a class="btn btn-lg btn-primary" href="index.php?accion=Registrate">Registrate hoy</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-4">
        <img src="imagenes/Conosenos.jpeg" class="d-block w-80" alt="..." width="500" height="500">

        </div>

        <div class="col-4">
        <img src="imagenes/Conosenos.jpeg" class="d-block w-80" alt="..." width="500" height="500">

        </div>
        <div class="col-3">
        <img src="imagenes/Conosenos.jpeg" class="d-block w-80" alt="..." width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Somos un grupo de entrenadores capasitados y con mucha experiencia.</h5>
        <p >Te ayudaremos a conoser tu mejejor vercion.</p>
        <p><a class="btn btn-lg btn-primary" href="index.php?accion=Entrar">Conosenos</a></p>
      </div>

        </div>

      </div>
      
    
    </div>

    <div class="carousel-item ">
      <img src="imagenes/entrar.PNG" class="d-block w-100" alt="..." width="500" height="500">
      <div class="carousel-caption d-none d-md-block">
        <br>
        <h5 style="color: black;">Disfruta de grandes beneficios</h5>
        <p style="color: black;">Realiza tu pago en linea y goza de todos los servicios que tenemos para ti</p>
        <p><a class="btn btn-lg btn-primary" href="index.php?accion=Registrate">IniciarSesion</a></p>
      </div>
    </div>
    
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        

    <?php    

      
        require("herramientas/tolavar.php");
        $navegacion= new tolvarNav();
        $navegacion->Navegacion();
  
      

  
        

     

       ?>
    
    <br>
    <br>
    <br>

       
    <div class="container">

        <div class="row">
 
            <div class="col"><p class="fs-3" style="color:#38A0FC;"> Bienvenido a BeStrongProyect Somos un equipo de personal capasitado en el ambito del fittnes</p></div>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col " >
                <p class="fs-2" style="color:#0000ff;"> Nuestro Objetivo</p>
                <p class="fs-3" style="color:#38A0FC;"> Nuestro objetivo es poder ayudarte a construir el fisico que deseas, ayudandote con la mejor atencion, adaptando un plan a tus nesesidades y tu comodidad.</p>
               
                

            </div>
            
            <div 
            class="col"><p class="fs-2" style="color:#0000ff;"> Vision</p>
            <p class="fs-3" style="color:#38A0FC;"> Encontrar personas con la disiplina y el caracter para poder realizar su plan al 100% y obtener su mejor vercion asi poder capasitar a esta persona y que sea parte del Proyecto BeStrong, asi crecer juntos.</p>
            </div>

        </div>
    </div>
   
   

    <br>
    <br>
   <div class="container  bg-primary text-center">
       <div class="row">
            <p class="fs-2"style="color: white;"> Contactanos a nuestras cuentas personales</p>
           <div class="col-3">
           
           <br>
           <p class="fs-5"style="color: white;"> Facebook:</p>
    
           <p class="fs-7"style="color: white;"> Fernando R. Ruelas </p>
           <p class="fs-7"style="color: white;"> Melvin Duran </p>
             
           </div>

           <div class="col-3">
           
           <br>
           <p class="fs-5"style="color: white;"> Instagram:</p>
           
           <p class="fs-7"style="color: white;"> Fernando_ruelas03 </p>
           <p class="fs-7" style="color: white;"> Melvin_Duran </p>
             
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
