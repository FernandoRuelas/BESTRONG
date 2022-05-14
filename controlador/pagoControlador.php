

<?php 
            if(!isset($_SESSION['userNombre'])) {
                session_start();
              }
              
              include("coneccion/db_bestrong.php");

              $id= $_SESSION['userId'];

              //obtenemos la fecha de hoy
                //obtenemos fecha
                date_default_timezone_set("America/El_salvador");

                $fecha=date("Y-m-d");
            
                //Hacemos la insercion de datos en la BD
           

              $queryUpdateUsuario = "UPDATE Usuario SET estado = 'activo' WHERE idUsuario =$id";
          
              mysqli_query($connLocalhost, $queryUpdateUsuario) or trigger_error("La inserción del registro del usuario ha fallado");

            


            
              //acer insersion en la bd donde dira que el estado del usuario es activo
              //hacer insercion en la tabla pagos donde insertaremos la fecha en la que se realizo el pago
            $_SESSION['userEstado']="activo";
            header("location: index.php?accion=PerfilUsuario");
           ?>