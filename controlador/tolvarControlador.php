<?php 

class tolvarControlador{

 
    //Realiza cambio de paguinas
    public function cambioPaguinas(){

        if(!isset($_SESSION['userNombre'])) {
            session_start();
          }

        

            if (isset($_GET["accion"])) {

                if ( $_GET["accion"]=="inicio"||
                $_GET["accion"] =="Nosotros" ||
                $_GET["accion"] =="Entrar"||
                $_GET["accion"] =="Registrate"||
                $_GET["accion"] =="pago" ) {

                    include ("vistas/".$_GET["accion"].".php");
                 }
                 elseif ($_GET["accion"]== "RegistroControlador") {
                    include("controlador/RegistroControlador.php");
                }
                elseif ($_GET["accion"]== "EntrarControlador") {
                    include("controlador/EntrarControlador.php");
                }
               
                elseif ($_GET["accion"]=="inicioLogueado"||
                        $_GET["accion"]=="PerfilUsuario"||
                        $_GET["accion"]=="Formulario" ){

                            if (isset($_SESSION["userId"])) {
                            include ("vistas/".$_GET["accion"].".php");
                                }
                }
                elseif ($_GET["accion"]=="FormularioControlador"||
                        $_GET["accion"]=="pagoControlador") {
                    if (isset($_SESSION["userId"])) {
                        include ("controlador/".$_GET["accion"].".php");
                    }
                }
               
            }
            else {
               
                    if (isset($_SESSION["userId"])) {
                    include "vistas/inicioLogueado.php";
                    }
                    else {
                        include "vistas/inicio.php";
                    }
                
                
            }
           
                 

    }


    
}

?>
