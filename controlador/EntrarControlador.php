
<?php   


  // Inicializamos la sesión o la retomamos
  if(!isset($_SESSION['userNombre'])) {
    session_start();
  }


  // Incluimos la conexión a la BD
  include("coneccion/db_bestrong.php");


  // Evaluamos si el formulario ha sido enviado
  if(isset($_POST['Entrar'])) {
      
  // Validamos si las cajas     están vacias
  foreach($_POST as $caja => $dato) {
      if($dato == "") $error[] = "The field $caja is required";
  }

  if(!isset($error)) {
        

       // Armamos el query para verificar el email y el password en la BD
        $queryLogin = sprintf("SELECT idUsuario, nombre, correo, estado, tipoUsuario, pago FROM Usuario WHERE correo = '%s' AND contraseña = '%s'",
          mysqli_real_escape_string($connLocalhost, trim($_POST['correoEntrar'])),
          mysqli_real_escape_string($connLocalhost, trim($_POST['contraseñaEntrar']))
     
      );

      // Ejecutamos el query
      $resQueryLogin = mysqli_query($connLocalhost, $queryLogin) or trigger_error("Algun dato es incorrecto");
      // Determinamos si el login es valido (email y password coincidentes);
      // Contamos el recordset (el resultado para un login valido es 1)
      if(mysqli_num_rows($resQueryLogin)) {

        $userData = mysqli_fetch_assoc($resQueryLogin);

       
            // Hacemos un fetch del recordet
          

          // Definimos variables de sesion en $_SESSION
              $_SESSION['userId'] = $userData['idUsuario'];
              $_SESSION['userRol'] = $userData['tipoUsuario'];
              $_SESSION['userNombre'] = $userData['nombre'];
              $_SESSION['userEstado'] = $userData['estado'];
              $_SESSION['userCorreo'] = $userData['correo'];
              $_SESSION['userPago']=$userData['pago'];
            
    
          // Redireccionamos al usuario al panel de control
          if ( $userData['estado']=="activo") {

                $id=$_SESSION['userId'];
                  
              // Armamos el query parabtener el id del ultimo formulario que subio el usuario
               $querySelectId = "SELECT MAX(idFormularios) AS idFo FROM Formularios WHERE idUsuario = $id" ;

              // Ejecutamos el query
                $resQuerySelectId = mysqli_query($connLocalhost, $querySelectId) or trigger_error("Algun dato es incorrecto");

                
                //obtenemos el id
                 $idFormulario= mysqli_fetch_assoc($resQuerySelectId);
                 $a=$idFormulario['idFo'];

                 if (empty($a)) {
                  header("location: index.php?accion=Formulario");
                 }
               
                //hacemos consulta para obtener la fecha
                $querySelectFecha = "SELECT fecha FROM Formularios WHERE idFormularios = $a" ;

                //ejecutamos el query
                $resQuerySelectFecha = mysqli_query($connLocalhost, $querySelectFecha) or trigger_error("Algun dato es incorrecto");

                 
                //obtenemos la fecha de la consulta
                $fechaSelectFecha= mysqli_fetch_assoc($resQuerySelectFecha);


                //verificamos si la fecha que obtenemos no es nula
                if ( empty($fechaPago= $fechaSelectFecha['fecha'])) {
                  $fechaPago="0000-00-00";
                }
                else {
                  $fechaPago= $fechaSelectFecha['fecha'];
                }
               
                $fechaPago1=date_create($fechaPago);
    
             
                

                //obtenemos la fecha de hoy
                //obtenemos fecha
                date_default_timezone_set("America/El_salvador");

                $fecha=date("Y-m-d");
                $fecha1=date_create($fecha);

                //prueba
               

                if ($fechaPago == null ||$fechaPago == "0000-00-00" ) {
                                  
                  header("location: index.php?accion=Formulario");
                }
                else {
                  //verificamos la diferencia eentre los pagos
                  $diferencia=date_diff($fechaPago1, $fecha1 );
                  

                  $tiempo=array();

                  foreach ($diferencia as $valor) {
                    $tiempo[]=$valor;
                  }
              
                  if ($tiempo[1]>=1) {

                    $queryUpdateUsuario1 = "UPDATE Usuario SET estado = 'inactivo'  WHERE idUsuario =$id";
            
                    mysqli_query($connLocalhost, $queryUpdateUsuario1) or trigger_error("La inserción del registro del usuario ha fallado");

                    echo '
                    <script>
                    alert("Tu pago expiro");
                    window.location= "index.php?accion=pago";
                    </script>
                    ';
                    
                    
                  }

                  else {
                    
                    header("location: index.php?accion=inicioLogueado");
                  }
                }



          
          
            }
           else {
           header("location: index.php?accion=pago");
            }
      
      }
      else {
        echo '
        <script>
            alert("Correo o contraseña incorrecta, intentelo de nuevo");
            window.location= "index.php?accion=Entrar";
        </script>
        ';
       
      }
  }else {
    echo '
    <script>
        alert("Debe llenar todos los campos");
        window.location= "index.php?accion=Entrar";
    
    </script>
    ';
    
  }


  }else {
    echo '
            <script>
                alert("Debe llenar el formulario con los datos requeridos");
                window.location= "index.php?accion=Entrar";
            
            </script>
            ';

  }




 

?>