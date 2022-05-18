

<?php 
class modales{

    public function modalFormulario(){
?>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <div  style="background-color: #b5f5fd;" class=" m-0 justify-content-center">
                <h1 class="fs-2 text-center" for="text">Tu informacion esta segura con nostros. </h1>
                <br>
                <br>
                <p class="fs-4 text-center"> LLena este formulario y envialo, asi tu entranador podra armar tu plan personalizado. </p>
                <br>
                <br>
                <p class="fs-4 text-center"> La informacion debe ser real, recuerda estos datos son nesesario para poder lograr tu objetivo. </p>
                <br>
                <br>


    </div>

    <form method="POST" action="index.php?accion=FormularioControlador" enctype="multipart/form-data"  >
        <br>
       
        <div  class="m-0 row justify-content-center">
            
            <div style="background-color: #e3f2fd;" class=" col-9 m-0 row justify-content-center">
                
                <label class="form-label fs-4">Describa su objetivo detalladamente</label>
                <textarea class="form-control" name="objetivo" rows="5"></textarea>
                <div id="emailHelp" class="form-text">Tu informacion es segura.</div>

                <br>
                <br>
                <div class="row">
                    
                    <div class="col-3">
                    <label  class="form-label fs-5">Estatura</label>
                    <input type="number" step="0.01" class="form-control" name="estatura">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Mts</label>
                    </div>
                    <div class="col-3" >
                    <label  class="form-label fs-5">Peso</label>
                    <input type="number" step="0.01" class="form-control" name="peso">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Kg</label>
                    </div>
                    <div class="col-3" >
                    <label  class="form-label fs-5">Edad</label>
                    <input type="number" step="0.01" class="form-control" name="edad">
                    </div>
                    <div class="col-1">
                        <br>
                        <br>
                    <label  class="form-label fs-7">Años</label>
                    </div>
                    
                    <br>
                </div>

                <br>
                <br>
                <label class="form-label fs-5">Describa las actividades que realiza en su dia</label>
                <textarea class="form-control" name="actividades" rows="5">Ejemplo soy futbolista, ademas estudio etc..</textarea>
                

                <br>
                <br>
                <label  class="form-label fs-5">Si tiene alergias favor de ponerlas aqui(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="alergias" rows="5">Ejemplo: Soy alerjico a tal medicamento, soy alerjico a tal alimento etc.. </textarea>
                   
                <div class="row">
                    
                    <div class="col-4">
                    <label  class="form-label fs-5">Hora a la que duerme</label>
                    <input type="time" class="form-control" name="horaDormir">
                    </div>
                    <div class="col-4" >
                    <label  class="form-label fs-5">Hora a la que despierta</label>
                    <input type="time" class="form-control" name="horaDespertar">
                    </div>
                   
                
                </div>

                <br>
                <br>
                <label  class="form-label fs-5">Si tiene leciones favor de ponerlas aqui.(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="lesiones" rows="5">Ejemplo: tengo lecion en mi rodilla derecha, me lecione en un partido y tengo 3 meses con el dolor</textarea>
                   
                <br>
                <br>
                <label  class="form-label fs-5">Si tiene enfermedades favor de ponerlas aqui.(En dado caso de no tener escribir ninguna)</label>
                <textarea class="form-control" name="enfermedades" rows="5">Ejemplo: soy asmatico pero estoy medicado.</textarea>
                   
                <div class="col-4" >
                    <label  class="form-label fs-5">Hora a la que entrena</label>
                    <input type="time" class="form-control" name="horaEntreno">
                </div>

                
                <br>
                <br>
                <br>
                <label  class="form-label fs-5">Si actualmente entrena, entrenaba o no entrana favor de explicarlo.</label>
                <textarea class="form-control" name="situacionGym" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                
                <br>
                <br>
                <label  class="form-label fs-5">En que lugar estara entrenando (casa o gym, de ser en casa explicar el amterial con el que cuenta).</label>
                <textarea class="form-control" name="locacionEntreno" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                
                <br>
                <br>
                <label  class="form-label fs-5">Comentario extra que quiera agregar.</label>
                <textarea class="form-control" name="comentario" rows="5"></textarea>
                
                <br>
                <br>
                <div>
                    <br>
                    
                        <label class="form-label fs-5">Subir imagenes con traje de baño o ropa deportiva que no obstrulla la visibilidad del cuerpo. </label>
                        <br>
                        <br>
                        <br>

                        <label class="form-label fs-5">Seleccione imagen de frente.</label>
                        <input type="file" name="fotoFrente" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de espaldas.</label>
                        <input type="file" name="fotoEspalda" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de uno de sus perfiles.</label>
                        <input type="file" name="fotoPerfilUno" required /><br>

                        <label class="form-label fs-5">Seleccione imagen de su otro perfil.</label>
                        <input type="file" name="fotoPerfilDos" required /><br>
                   
                </div>

                
                <br>
                <br>
                
            
        
                <br>
                <br>

            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input class="btn btn-lg btn-primary" type="submit" value="Enviar" name="EnviarFormulario">
      </div>
    </div>
  </div>
</div>

<!--Modal2!-->


<!-- Modal -->

<?php 
    }
      public function modalMostrar(){

      
?>


  

        <!-- Modal -->
        <div class="modal fade" id="modalMostrarForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog  modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

             

              <div  class="m-0 row justify-content-center">
                  
                  <div style="background-color: #e3f2fd;" class=" col-9 m-0 row justify-content-center">

                  <form action="index.php?accion=mostrarPerfil" method="POST">
                              
                              
                        
                              <label for="text">Cliente: </label>  <input id="idVerFotos" name="verFotos" readonly  type="text"   > <input id="nombre" disabled type="text" readonly>
                              
                            
                            
                              
                              <input class="btn btn-lg btn-primary"  type="submit" value="Ver Fotos" name="btnVerFotos">

                            
                   </form>
                  

                    
                      
                      <label class="form-label fs-4">Objetivo</label>
                      <textarea  id="objetivo" class="form-control" readonly disabled name="objetivo" rows="5"></textarea>
                  

                      <br>
                      <br>
                      <div class="row">
                          
                          <div class="col-3">
                          <label  class="form-label fs-5">Estatura</label>
                          <input id="estatura" readonly type="number" step="0.01" class="form-control" name="estatura">
                          </div>
                          <div class="col-1">
                              <br>
                              <br>
                          <label  class="form-label fs-7">Mts</label>
                          </div>
                          <div class="col-3" >
                          <label  class="form-label fs-5">Peso</label>
                          <input id="peso" readonly type="number" step="0.01" class="form-control" name="peso">
                          </div>
                          <div class="col-1">
                              <br>
                              <br>
                          <label  class="form-label fs-7">Kg</label>
                          </div>
                          <div class="col-3" >
                          <label readonly class="form-label fs-5">Edad</label>
                          <input id="edad" type="number" step="0.01" readonly class="form-control" name="edad">
                          </div>
                          <div class="col-1">
                              <br>
                              <br>
                          <label  class="form-label fs-7">Años</label>
                          </div>
                          
                          <br>
                      </div>

                      <br>
                      <br>
                      <label class="form-label fs-5">Actividades que realiza en su dia</label>
                      <textarea id="actividades" readonly class="form-control" name="actividades" rows="5">Ejemplo soy futbolista, ademas estudio etc..</textarea>
                      

                      <br>
                      <br>
                      <label  class="form-label fs-5">Alerjias</label>
                      <textarea id="alerjias" readonly class="form-control" name="alergias" rows="5">Ejemplo: Soy alerjico a tal medicamento, soy alerjico a tal alimento etc.. </textarea>
                        
                      <div class="row">
                          
                          <div class="col-4">
                          <label  class="form-label fs-5">Hora a la que duerme</label>
                          <input id="horaDormir" readonly type="text" class="form-control" name="horaDormir">
                          </div>
                          <div class="col-4" >
                          <label  class="form-label fs-5">Hora a la que despierta</label>
                          <input id="horaDespertar" readonly type="text" class="form-control" name="horaDespertar">
                          </div>
                        
                      
                      </div>

                      <br>
                      <br>
                      <label  class="form-label fs-5">Leciones</label>
                      <textarea  id="lesiones"  readonly class="form-control" name="lesiones" rows="5">Ejemplo: tengo lecion en mi rodilla derecha, me lecione en un partido y tengo 3 meses con el dolor</textarea>
                        
                      <br>
                      <br>
                      <label  class="form-label fs-5">Enfermedades</label>
                      <textarea  id="enfermedades" readonly class="form-control" name="enfermedades" rows="5">Ejemplo: soy asmatico pero estoy medicado.</textarea>
                        
                      <div class="col-4" >
                          <label  class="form-label fs-5">Hora a la que entrena</label>
                          <input id="horaEntreno" readonly type="text" class="form-control" name="horaEntreno">
                      </div>

                      
                      <br>
                      <br>
                      <br>
                      <label  class="form-label fs-5">Situacion en la que se encuentra.</label>
                      <textarea id="situacionGym" readonly class="form-control" name="situacionGym" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                      
                      <br>
                      <br>
                      <label  class="form-label fs-5">Lugar en el que entrena</label>
                      <textarea id="locacionEntreno" readonly class="form-control" name="locacionEntreno" rows="5">Ejemplo: actualmente sigo entrenando, aproximandamente tengo 1 año en el gym..</textarea>
                      
                      <br>
                      <br>
                      <label  class="form-label fs-5">Comentario </label>
                      <textarea id="comentario" readonly class="form-control" name="comentario" rows="5"></textarea>
                      
                      <br>
                      <br>
                      <div>
                    <br>
                    <br>

                    <main class="form-signin">
                        <div class="container col-3">
                        <form action="index.php?accion=subirPlanControlador" method="POST" enctype="multipart/form-data">
                         
                        <div class="form-floating">
                            <input type="text" class="form-control" id="id" name="idUsuerPlan"  readonly>
                            <label for="floatingPassword">ID del usuario</label>
                            </div>
                          
                            <div class="form-floating">
                            <input type="text" class="form-control" id="titulo" name="tituloPdf" >
                            <label for="floatingPassword">Titulo del pdf</label>
                            </div>
                      
                            <input type="file" class="form-control" name="pdf" >
                         
                         

                          
                          <input class="btn btn-lg btn-primary"  type="submit" value="Subir Plan" name="subirPlan">
                         
                          <p class="mt-5 mb-3 text-muted">&copy; Bestrong</p>

                        </form>
                        </div>
                      </main>
                                        

                                  



                  
                        
                


                        
                    
                            
                          
                      </div>

                      
                      <br>
                      <br>
                      
                  
              
                      <br>
                      <br>



                    

                  </div>



                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>


<?php 

}

}
?>