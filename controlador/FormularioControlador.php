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

     

        //obtenemos fecha
        date_default_timezone_set("America/El_salvador");

        $fecha=date("Y-m-d");
        
        //Hacemos la insercion de datos en la BD
    
           

        $queryInsertFormulario = sprintf("INSERT INTO Formularios (fecha, objetivo, estatura, peso, actividades, alergias, edad, horaDormir,horaDespertar, lesiones, enfermedades, horaEntreno, media, idUsuario, locacionEntreno, comentario) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
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
        ($_FILES['imagen']),
        ($_SESSION['userId']),
        mysqli_real_escape_string($connLocalhost, trim($_POST['locacionEntreno'])),
        mysqli_real_escape_string($connLocalhost, trim($_POST['comentario']))
        );
    
        mysqli_query($connLocalhost, $queryInsertFormulario) or trigger_error("La inserción del Formulario del usuario ha fallado");

        //Readireccionamos a la ventana para iniciar secion.
        header("location: index.php?accion=PerfilUsuario");



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