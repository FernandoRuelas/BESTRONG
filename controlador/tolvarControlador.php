<?php 

class tolvarControlador{

 
    //Realiza cambio de paguinas
    public function cambioPaguinas(){

        

            if (isset($_GET["accion"])) {

                if ( $_GET["accion"]=="Inicio"||
                $_GET["accion"] =="Nosotros" ||
                $_GET["accion"] =="Entrar"||
                $_GET["accion"] =="Registrate" ) {

                    include ("vistas/".$_GET["accion"].".php");
                 }
                 elseif ($_GET["accion"]== "RegistroControlador") {
                    include("controlador/RegistroControlador.php");
                }

               
            }
            else {
                include "vistas/inicio.php";
            }
           
                 

    }


    
}

?>
