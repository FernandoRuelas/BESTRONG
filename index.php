

<?php 



if(isset($_GET["accion"])){
   
    require_once("controlador/tolvarControlador.php");
    $cambioDePaginas= new tolvarControlador();
    $cambioDePaginas->cambioPaguinas();

}else{

    
include("vistas/inicio.php");
}

?>
