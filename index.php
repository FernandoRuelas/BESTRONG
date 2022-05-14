
<head>
<script type= "text/javascript" src="https:code.jquery.com/jquery-3.1.1.min.js"></script>
<script  src="herramientas/funciones.js"></script>
</head>

<?php 



if(isset($_GET["accion"])){
   
    require_once("controlador/tolvarControlador.php");
    $cambioDePaginas= new tolvarControlador();
    $cambioDePaginas->cambioPaguinas();
    if ($_GET["accion"]=="PerfilUsuario" && isset($_SESSION["userId"])) {
       
        require_once("herramientas/ModalFormulario.php");
        $modal= new modales();
        $modal->modalFormulario();
    }elseif ($_GET["accion"]=="perfilAdmi" && isset($_SESSION["userId"])) {
        require_once("herramientas/ModalFormulario.php");
        $modal= new modales();
        $modal->modalMostrar();
      

    }

    
    

}else{

    
include("vistas/Nosotros.php");
}


?>
