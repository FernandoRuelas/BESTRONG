<?php 
 
 //Si no hay errores incluimos la BD
 include("../coneccion/db_bestrong.php");

 //Revisamos si el formulario fue enviado
 if (isset($_POST["sent"])) {

    //Revisamos si todas las cajas fueron llenadas
    foreach($_POST as $caja => $valor) {
        if($valor == "") $error[] = "The field $caja is required";
    }

    
    // Validación de email
    // Preparamos la consulta para determinar si el email proporcionado ya existe en la BD
   
    $queryCheckCorreo =sprintf("SELECT * FROM Usuario WHERE correo= '%s'",
    mysqli_real_escape_string($connLocalhost, trim($_POST['correoRegistro'])));

    // Ejecutamos el query
    // ESTE ES UN RECORDSET
    $resQueryCheckEmail = mysqli_query($connLocalhost, $queryCheckCorreo);
    //or trigger_error("El query de validación de email falló");

    $resultado=mysqli_num_rows($resQueryCheckEmail);
    // Contar el recordset para determinar si se encontró el correo en la BD
    if(mysqli_num_rows($resQueryCheckEmail)>0) {
        
        $error[] = "El correo ya esta en uso";
        echo '
        <script>
            alert("Este correo ya esta registrado, intente con otro");
            window.location= "../index.php?accion=Registrate";
        
        </script>
        ';
    }

    //Verificamos que la contraseña sea la misma
    if($_POST['contraseñaRegistro'] == $_POST['contraseña2Registro']) {
    
          //Verificamos que no aya errores
          if (!isset($error) ) {
            
            
            //Hacemos la insercion de datos en la BD
            
                $queryInsertUsuario = sprintf("INSERT INTO Usuario (nombre, contraseña, correo, telefono, tipoUser, estado) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
                mysqli_real_escape_string($connLocalhost, trim($_POST['nombreRegistro'])),
                mysqli_real_escape_string($connLocalhost, trim($_POST['contraseña2Registro'])),
                mysqli_real_escape_string($connLocalhost, trim($_POST['correoRegistro'])),
                mysqli_real_escape_string($connLocalhost, trim($_POST['telefonoRegistro'])),
                ("cliente"),
                ("inactivo")
                );
            
                mysqli_query($connLocalhost, $queryInsertUsuario) or trigger_error("La inserción del registro del usuario ha fallado");

                //Readireccionamos a la ventana para iniciar secion.
                header("location: ../index.php?accion=Entrar");

        }
        //En dado caso de errores Redireccionamos a registro
        else {
            echo '
            <script>
                alert($error);
                window.location= "../index.php?accion=Registrate";
            
            </script>
            ';

        }
    

        
    
    }
    //si la contraseña no es la mima arrogara un mensaje
    else {
        echo '
            <script>
                alert("la contraseña debe ser la misma");
                window.location= "../index.php?accion=Registrate";
            
            </script>
            ';
        

    }

        
    


   

 }
?>