<HTML>
        

    <HEAD>

            <!-- ********************************
        ****** Scrips de css boostrap********
        **********************************-->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
        <?php 

           
                 require("herramientas/tolavar.php");
                 $navegacion= new tolvarNav();
                 $navegacion->Navegacion();
           
               
        ?>

    </HEAD>
    
    <BODY>

    <!--*******************
    ****carrusel cabezera***
  


    <!--*******************
    ****carrusel uno*******
    **********************-->
        <div class="container" style="background-color: #e3f2fd;">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <br>
                    <br>
                    <br>

                    <h1  class="center-align titulo" style="color:blue"> Arturo Coronado </h1>
                    <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                               
                                <img src="imagenes/premiacion1.jpeg" class=" mx-auto d-block w-100" width="200" height="500" alt="...">
                               
                             </div>
                            <div class="carousel-item">
                            <img src="imagenes/premiacion2.jpeg" class=" mx-auto d-block w-100" width="200" height="500" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="imagenes/premiacion3.jpeg" class=" mx-auto d-block w-100" width="200" height="500" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="imagenes/premiacion4.jpeg" class=" mx-auto d-block w-100" width="200" height="500" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
            
                </div>


            </div>

    
            
              <!--*******************
            ****segundo carrusel****
            ********************-->
            <div class="row justify-content-left">

                <div class="col-sm-6 col-sm-offset-2">
                    <br>
                    <br>
                    <br>

                    <h1  class="center-align titulo" style="color:blue"> Atletas Destacados</h1>
                    <div id="carouselExampleDark2" class="carousel carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                               
                                <img src="imagenes/Fernando.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">Fernando Ruelas.</h5>
                                    <p style="color: black;">Men's Physique.</p>
                                    <h4 style="color: black;" >Mr mexico Juvenil.</h4>
                                    <p style="color: black;">Campeon absoluto 2022.</p>
                                    <p style="color: black;">@fernando_ruelas03.</p>
                                  
                                </div>
                               
                             </div>
                            <div class="carousel-item">
                            <img src="imagenes/raul.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Raul Rivera.</h5>
                                    <p >Absoluto clasic physique</p>
                                    <p >Absoluto Men's physique</p>
                                    <p >@raul_rivera</p>
                                  
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="imagenes/snok.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>snok.</h5>
                                    <p >Absoluto clasic physique</p>
                                    <p >Absoluto fisico</p>
                                    <p >@snok</p>
                                  
                                </div>
                            
                            </div>
                            <div class="carousel-item">
                            <img src="imagenes/barragan.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Alfredo Barragan.</h5>
                                    <p >Men's physique</p>
                                    <p >1er lugar Men's physique novatos </p>
                                    <p >@alfredo_barragan</p>
                                  
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="imagenes/jairo.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5>Jairo.</h5>
                                    <p >Men's physique</p>
                                    <p >1er lugar Men's physique novatos </p>
                                    <p >@jairo</p>
                                  
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>


            
                </div>
                <br>
                <div class="col-sm-6 col-sm-offset-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>COMVIERTETE EN CAMPEON</h1>
                    <br>
                    <p>Unete a mi proyecto y convierte en un campeon. Lleva a tu cuerpo al limite y conose tu mejor vercion.</p>
                    <br>
                    <p></p>
                </div>
            </div>

                    <!--*******************
            ****tercer carrusel****
            ********************-->

            <div class="row justify-content-left">
                <div class="col-sm-6 col-sm-offset-2">
                    <br>
                    <br>
                    <br>

                    <h1  class="center-align titulo" style="color:blue"> Actividades</h1>
                    <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/actividad.jpeg" class=" mx-auto d-block w-100" width="200" height="700" alt="...">
                           </div>


                            <div class="carousel-item">
                            <img src="imagenes/actividad2.jpeg" class=" mx-auto d-block w-100" width="200" height="500" alt="...">
                            </div>

                            <div class="carousel-item">
                            <img src="imagenes/actividad3.jpeg" class=" mx-auto d-block w-100" width="200" height="800" alt="...">
                             </div>
                            <div class="carousel-item">
                            <img src="imagenes/actividad4.jpeg" class=" mx-auto d-block w-100" width="200" height="600" alt="...">
                              </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
            
                </div>

                <div class="col-sm-6 col-sm-offset-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>Actividades al aire libre</h1>
                    <br>
                    <p>Acostumbramos a salir de lo ordinario y realizar diferentes actividades al aire libre siguiendo los buenos avitos. </p>
                    <br>
                    <p></p>
                </div>
            </div>
            </div>



            <div class="container">

<div class="row">
    <div class="col " >
        <p class="fs-2" style="color:#0000ff;"> Nuestro Objetivo</p>
        <p class="fs-3" style="color:#38A0FC;"> Nuestro objetivo es poder ayudarte a construir el fisico que deseas, ayudandote con la mejor atencion, adaptando un plan a tus nesesidades y tu comodidad.</p>
       
        

    </div>
    
    <div 
    class="col"><p class="fs-2" style="color:#0000ff;"> Vision</p>
    <p class="fs-3" style="color:#38A0FC;"> Encontrar personas con la disiplina y el caracter para poder realizar su plan al 100% y obtener su mejor vercion asi poder capasitar a esta persona y que sea parte del Proyecto BeStrong, asi crecer juntos.</p>
    </div>

</div>
</div>
            <br>
            <br>
            <br>




          

        </div>
        <br>
            <br>
            <br>

             <!--*******************
            ****informacion****
            ********************-->


            <div class="container  bg-primary text-center">
                <div class="row">
                        <p class="fs-2"style="color: white;"> Contactanos a nuestras cuentas personales</p>
                    <div class="col-3">
                    
                    <br>
                    <p class="fs-5"style="color: white;"> Facebook:</p>
                
                    <p class="fs-7"style="color: white;"> Fernando R. Ruelas </p>
                    <p class="fs-7"style="color: white;"> Melvin Duran </p>
                        
                    </div>

                    <div class="col-3">
                    
                    <br>
                    <p class="fs-5"style="color: white;"> Instagram:</p>
                    
                    <p class="fs-7"style="color: white;"> Fernando_ruelas03 </p>
                    <p class="fs-7" style="color: white;"> Melvin_Duran </p>
                        
                 </div>

            </div>



        <!-- ********************************
        ****** Scrips de boostrap************
        **********************************-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            
    </BODY>





</HTML>