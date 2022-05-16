<?php

use function PHPSTORM_META\type;

if (isset($_POST['publicar'])) {
   
    include("coneccion/db_bestrong.php");

    date_default_timezone_set("America/El_salvador");

    $fecha=date("Y-m-d");

    $imagen = $_FILES['imagen']['tmp_name'];
    $imgContent = addslashes(file_get_contents($imagen));

    
  

      //Hacemos la insercion de datos en la BD
            
      $querySubir = sprintf("INSERT INTO Post (descripcionPost, archivo, idUsuarioPost, fechaPost) VALUES ('%s', '%s', '%s', '%s')",
      mysqli_real_escape_string($connLocalhost, trim($_POST['descripcion'])),
      ($imgContent),
      ($_SESSION['userId']),
      ($fecha)
   
      );
  
      mysqli_query($connLocalhost, $querySubir) or trigger_error("La inserción del registro del usuario ha fallado");

      //Readireccionamos a la ventana para iniciar secion.
      header("location: ../index.php?accion=inicioAdmi");


}



?>