<?php 

include("coneccion/db_bestrong.php");

 



if (isset($_POST['subirPlan'])) {

    date_default_timezone_set("America/El_salvador");

    $date=date("Y-m-d");

    $nombre =$_FILES['pdf']['name'];
    $tipo =$_FILES['pdf']['type'];
    $ruta= $_FILES['pdf']['tmp_name'];
    $destino="archivos/".$nombre;

    if ($nombre != "") {
        if (copy($ruta, $destino)) {
           $titulo = $_POST["tituloPdf"];
           $id= $_POST["idUsuerPlan"];
           $fecha=  $date;

           $query="INSERT INTO Planes (titulo, fecha, idUsuarios, nombre) VALUES ('$titulo','$fecha','$id', '$nombre')";
           $resquery = mysqli_query($connLocalhost, $query) or trigger_error("Algun dato es incorrecto");
           if ($resquery) {

                $queryBorrar= "DELETE FROM  copiaFormulario WHERE idUsuario2 = $id";
                $resqueryBorrado = mysqli_query($connLocalhost, $queryBorrar) or trigger_error("Algun dato es incorrecto");
               header("location: index.php?accion=perfilAdmi");
           }else {
               echo "no se guardo"; 
           }
          

        }else {
            echo "fracaso";
        }
    }
}


?>