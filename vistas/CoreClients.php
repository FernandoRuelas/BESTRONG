    <?php 
    header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header('Access-Control-Allow-Methods: GET');
	header('Content-Type: application/json');

      $id=$_POST['id'];
      
        //incluimos la BD
       include("../coneccion/db_bestrong.php");

        // Armamos el query 
        $queryForm= "SELECT * FROM copiaFormulario WHERE idUsuario2 = $id";

        // Ejecutamos el query
        $resQueryForm = mysqli_query($connLocalhost, $queryForm) or trigger_error("Algun dato es incorrecto");

       $datos= mysqli_fetch_assoc($resQueryForm); 

      
    
         
                $response = array(
                    "Error" => false,
                    "Message" => "success",
                    "peso" =>   $datos["peso2"],
                    "fecha" =>   $datos["fecha2"],
                    "objetivo" => $datos["objetivo2"],
                    "estatura" =>  $datos["estatura2"],
                    "actividades" =>  $datos["actividades2"],
                    "alergias" =>  $datos["alergias2"],
                    "edad" =>   $datos["edad2"],
                    "horaDormir" =>  $datos["horaDormir2"],
                    "horaDespertar" => $datos["horaDespertar2"],
                    "lesiones" =>  $datos["lesiones2"],
                    "enfermedades" =>   $datos["enfermedades2"],
                    "locacionEntreno" =>  $datos["locacionEntreno"],
                    "comentario" =>  $datos["comentario"],
                    "horaEntreno" =>$datos["horaEntreno"],
                    "situacionGym" => $datos["situacionGym"],
                    
                );

                
                /*
                $response = array(
                    "Error" => false,
                    "Message" => "success",
                    "peso" =>   $id, 
                    "fecha" =>  "10-10-10", 
                    "objetivo" =>"as",
                    "estatura" => "12",
                    "actividades" => "as", 
                    "alergias" => "as",
                    "edad" =>  "12", 
                    "horaDormir" => "12:00",
                    "horaDespertar" =>"12:00",
                    "lesiones" => "as",
                    "enfermedades" =>  "as", 
                    "locacionEntreno" => "as", 
                    "comentario" => "as",
                    "horaEntreno" => "12:00",
                    "situacionGym" =>"as", 
                    "imagen1" => "https://www.reyesgutierrez.com/wp-content/uploads/2020/07/Osteen.jpg"
                );
*/


                echo json_encode($response);
         
                
         
        
    
    ?>
    
