<?php 

   //incluimos la BD
   include("coneccion/db_bestrong.php");
//iniciamos la bariable sesion 
if (!isset($_SESSION['userId'])) {
    session_start();
}

//verificamos que el formulario fue enviado correctamente
if (isset($_POST['EnviarFormulario'])) {
   
   // Validamos si las cajas     están vacias
   foreach($_POST as $caja => $dato) {
    if($dato == "") $error[] = "The field $caja is required";
    }

    if (!isset($error)) {

        $id=$_SESSION['userId'];
            //obtenemos fecha
            date_default_timezone_set("America/El_salvador");

            $fecha=date("Y-m-d");
            $fecha1=date_create($fecha);
                  
        // Armamos el query parabtener el id del ultimo formulario que subio el usuario
         $querySelectId = "SELECT MAX(idFormularios) AS idFo FROM Formularios WHERE idUsuario = $id" ;

        // Ejecutamos el query
          $resQuerySelectId = mysqli_query($connLocalhost, $querySelectId) or trigger_error("Algun dato es incorrecto");
          
        if ($resQuerySelectId) {
              //obtenemos el id
           $idFormulario= mysqli_fetch_assoc($resQuerySelectId);
           $a=$idFormulario['idFo'];

           $querySelectFecha = "SELECT fecha FROM Formularios WHERE idFormularios = $a" ;

           //ejecutamos el query
           $resQuerySelectFecha = mysqli_query($connLocalhost, $querySelectFecha) or trigger_error("Algun dato es incorrecto");
           $fechaSelectFecha= mysqli_fetch_assoc($resQuerySelectFecha);
           $fechaPago= $fechaSelectFecha['fecha'];

           $fechaPago1=date_create($fechaPago);

        

           $diferencia = date_diff($fechaPago1,$fecha1);

           $tiempo=array();
           
           foreach ($diferencia as $valor) {
             $tiempo[]=$valor;
           }
         
           if ($tiempo[1]>=1) {
          
            //obtenemos imagenes
            $fotoFrente = $_FILES['fotoFrente']['tmp_name'];
            $imgContentFrente = addslashes(file_get_contents($fotoFrente));

            $fotoEspaldas = $_FILES['fotoEspalda']['tmp_name'];
            $imgContentEspalda = addslashes(file_get_contents($fotoEspaldas));

            $fotoPerfilUno = $_FILES['fotoPerfilUno']['tmp_name'];
            $imgContentPerfilUno = addslashes(file_get_contents($fotoPerfilUno));

            $fotoPerfilDos = $_FILES['fotoPerfilDos']['tmp_name'];
            $imgContentPerfilDos = addslashes(file_get_contents($fotoPerfilDos));

            //Hacemos la insercion de datos en la BD
        
          

            $queryInsertFormulario = sprintf("INSERT INTO Formularios (fecha, objetivo, estatura, peso, actividades, alergias, edad, horaDormir,horaDespertar, lesiones, enfermedades, horaEntreno, fotoFrente, fotoEspaldas, fotoPerfilUno, fotoPerfilDos, idUsuario, locacionEntreno, comentario, situacionGym) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            ($fecha),
            mysqli_real_escape_string($connLocalhost, trim($_POST['objetivo'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['estatura'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['peso'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['actividades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['alergias'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['edad'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDormir'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDespertar'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['lesiones'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['enfermedades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaEntreno'])),
            ($imgContentFrente),
            ($imgContentEspalda),
            ($imgContentPerfilUno),
            ($imgContentPerfilDos),
            ($_SESSION['userId']),
            mysqli_real_escape_string($connLocalhost, trim($_POST['locacionEntreno'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['comentario'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['situacionGym']))
            );
        
            mysqli_query($connLocalhost, $queryInsertFormulario) or trigger_error("La inserción del Formulario del usuario ha fallado");

            //mandamos informacion a los pendientes del administrador
            
            $queryInsertFormulariocopia = sprintf("INSERT INTO copiaFormulario (fecha2, objetivo2, estatura2, peso2, actividades2, alergias2, edad2, horaDormir2,horaDespertar2, lesiones2, enfermedades2, horaEntreno, fotoFrente, fotoEspaldas, fotoPerfilUno, fotoPerfilDos, idUsuario2, locacionEntreno, comentario, situacionGym) VALUES ('%s','%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            ($fecha),
            mysqli_real_escape_string($connLocalhost, trim($_POST['objetivo'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['estatura'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['peso'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['actividades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['alergias'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['edad'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDormir'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDespertar'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['lesiones'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['enfermedades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaEntreno'])),
            ($imgContentFrente),
            ($imgContentEspalda),
            ($imgContentPerfilUno),
            ($imgContentPerfilDos),
            ($_SESSION['userId']),
            mysqli_real_escape_string($connLocalhost, trim($_POST['locacionEntreno'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['comentario'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['situacionGym']))
            );
        
            mysqli_query($connLocalhost, $queryInsertFormulariocopia) or trigger_error("La inserción del Formulario del usuario ha fallado");


            //Readireccionamos a la ventana para iniciar secion.
            header("location: index.php?accion=PerfilUsuario");
                    

            }else {
               
                echo '
                    <script>
                    alert("El formulario solo puede ser enviado una vez por mes");
                    window.location= "index.php?accion=PerfilUsuario";
                    </script>
                    ';
                    
            }

        }else {

              
            //obtenemos imagenes
            $fotoFrente = $_FILES['fotoFrente']['tmp_name'];
            $imgContentFrente = addslashes(file_get_contents($fotoFrente));

            $fotoEspaldas = $_FILES['fotoEspalda']['tmp_name'];
            $imgContentEspalda = addslashes(file_get_contents($fotoEspaldas));

            $fotoPerfilUno = $_FILES['fotoPerfilUno']['tmp_name'];
            $imgContentPerfilUno = addslashes(file_get_contents($fotoPerfilUno));

            $fotoPerfilDos = $_FILES['fotoPerfilDos']['tmp_name'];
            $imgContentPerfilDos = addslashes(file_get_contents($fotoPerfilDos));

            //Hacemos la insercion de datos en la BD
        
          

            $queryInsertFormulario = sprintf("INSERT INTO Formularios (fecha, objetivo, estatura, peso, actividades, alergias, edad, horaDormir,horaDespertar, lesiones, enfermedades, horaEntreno, fotoFrente, fotoEspaldas, fotoPerfilUno, fotoPerfilDos, idUsuario, locacionEntreno, comentario, situacionGym) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            ($fecha),
            mysqli_real_escape_string($connLocalhost, trim($_POST['objetivo'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['estatura'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['peso'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['actividades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['alergias'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['edad'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDormir'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDespertar'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['lesiones'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['enfermedades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaEntreno'])),
            ($imgContentFrente),
            ($imgContentEspalda),
            ($imgContentPerfilUno),
            ($imgContentPerfilDos),
            ($_SESSION['userId']),
            mysqli_real_escape_string($connLocalhost, trim($_POST['locacionEntreno'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['comentario'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['situacionGym']))
            );
        
            mysqli_query($connLocalhost, $queryInsertFormulario) or trigger_error("La inserción del Formulario del usuario ha fallado");

            //mandamos informacion a los pendientes del administrador
            
            $queryInsertFormulariocopia = sprintf("INSERT INTO copiaFormulario (fecha2, objetivo2, estatura2, peso2, actividades2, alergias2, edad2, horaDormir2,horaDespertar2, lesiones2, enfermedades2, horaEntreno, fotoFrente, fotoEspaldas, fotoPerfilUno, fotoPerfilDos, idUsuario2, locacionEntreno, comentario, situacionGym) VALUES ('%s','%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            ($fecha),
            mysqli_real_escape_string($connLocalhost, trim($_POST['objetivo'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['estatura'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['peso'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['actividades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['alergias'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['edad'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDormir'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaDespertar'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['lesiones'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['enfermedades'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['horaEntreno'])),
            ($imgContentFrente),
            ($imgContentEspalda),
            ($imgContentPerfilUno),
            ($imgContentPerfilDos),
            ($_SESSION['userId']),
            mysqli_real_escape_string($connLocalhost, trim($_POST['locacionEntreno'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['comentario'])),
            mysqli_real_escape_string($connLocalhost, trim($_POST['situacionGym']))
            );
        
            mysqli_query($connLocalhost, $queryInsertFormulariocopia) or trigger_error("La inserción del Formulario del usuario ha fallado");


            //Readireccionamos a la ventana para iniciar secion.
            header("location: index.php?accion=PerfilUsuario");
            
        }    
                  
             


              
     
        

     

 



    }
    else {
        echo '
        <script>
        alert("Debe llenar todos los campos");
        window.location= "index.php?accion=Formulario";
    
        </script>
        
        ';
    }





}







?>