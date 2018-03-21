<!DOCTYPE html>
<html lang="en">

<?php include ('header.php'); ?>

<body style="background: white;">
  

<section class="svg-map " >
  <center>
  <div class="card text-center" style="z-index: 999; width: 75%;margin-top: -3em;-webkit-box-shadow: 0 2px 2px 0 transparent, 0 1px 5px 0 transparent, 0 3px 1px -2px transparent;">
   
      <div class="row" style="display: flex;flex-wrap: wrap; "> 
        <div class="col s12" style="padding:0;">
            <div style="background-image: url(&#39;assets/img/acerca de img-01.png&#39;);-webkit-background-size: cover;background-size: cover;">
              <img src="img/banner_contactenos.png" style="height: 100%;width:100%;">
            </div>
        </div>
      </div>  
          <div class="row" style="width: 100%; display: flex;flex-wrap: wrap;">
        <div class="col s12" style="display: flex;justify-content: center;">
          <ul class="tabs" style="justify-content: center;display: flex;height: 4.5em;">
            <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
              <a  href="#test1">Contáctanos</a>
            </li>
            <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
              <a class="active" href="#test2">Involúcrate</a>
            </li>
            
          </ul>
        </div>
        <div id="test1" class="col s12">
          <div class="contact-form">
            <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="" id="name" type="text" class="validate">
                  <label for="nombre">Nombre</label>
                </div>
    
                <div class="input-field col s6">
                  <input placeholder="" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <br><br>
             <div class="row">
                <div class="input-field col s6">
                  <input placeholder="" id="name" type="text" class="validate">
                  <label for="nombre">Organizacion</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="" id="email" type="text" class="validate">
                  <label for="telefono">Telefono</label>
                </div>
              </div>
              <br><br>

              <div class="row">
                <div class="input-field col s12">
                  <textarea placeholder="Escriba su mensaje" id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Textarea</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  
                  <a class=" btn-large">Enviar</a>
                </div>
              </div>
            </form>
          </div>
            
          </div>
        </div>




        </div>

    </div>
            <div id="test2" class="col s12 contact-form">
            <form>
                <div class="row" style="width: 75%;">
                    <div class="col s6">
                        <h5 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.5vw;">Datos Generales</h5>
                        <br>
                          <div class="input-field">
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Nombre del programa:</label>
                          </div>
                            <br><br>
                          <div class="input-field">
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Nombre nombre del programa:</label>
                          </div>
                          <br>
                            <div class="input-field col s12">
                              <br>
                              <select >
                                <option style="font-size: 1vw;color: #757575!important" value="1">Empresa Privada</option>
                                <option style="font-size: 1vw;color: #757575!important" value="2">Option 2</option>
                                <option style="font-size: 1vw;color: #757575!important" value="3">Option 3</option>
                              </select>
                              <label style="    font-size: 1vw;">Clasificacion de la organizacion que ejecuta el programa:</label>
                              <br><br>
                          </div> 
                          <br>

                      
                        <div class="input-field col s12">
                          <textarea placeholder="Actividad principal de la organizacion:" id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Textarea</label>
                        </div>
                    </div>

                    <div class="col s6">
                        <h5 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.3vw;">Objetivos de desarrollo sostenible a los que contribuye</h5>
                        <div class="col s6">
                             <p>
                              <input type="checkbox" id="1" />
                              <label for="1">Fin de la pobreza</label>
                            </p>
                            <p>
                              <input type="checkbox" id="2" />
                              <label for="2">Hambre y cero</label>
                            </p>
                            <p>
                              <input type="checkbox" id="3" />
                              <label for="3">Salud y bienestar</label>
                            </p>
                            <p>
                              <input type="checkbox" id="4" />
                              <label for="4">Educacion de calidad</label>
                            </p>
                            <p>
                              <input type="checkbox" id="5" />
                              <label for="5">Igualdad de genero</label>
                            </p>
                            <p>
                              <input type="checkbox" id="6" />
                              <label for="6">Agua limpia y sanamiento</label>
                            </p>
                            <p>
                              <input type="checkbox" id="7" />
                              <label for="7">Energia asequible y no contaminante</label>
                            </p>
                            <p>
                              <input type="checkbox" id="8" />
                              <label for="8">Trabajo decente y crecimiento econimico</label>
                            </p>
                            <p>
                              <input type="checkbox" id="9" />
                              <label for="9">Industria, innovacion e insfraestructura</label>
                            </p>
                            <p>
                              <input type="checkbox" id="10" />
                              <label for="10">Reducion de las desigualdes</label>
                            </p>
                            <p>
                              <input type="checkbox" id="11" />
                              <label for="11">Cuidades y comunidades sostenibles</label>
                            </p>
                        </div>
                        <div class="col s6">
                            <p>
                              <input type="checkbox" id="12" />
                              <label for="12">Produccion y consumo responsable</label>
                            </p>
                            <p>
                              <input type="checkbox" id="13" />
                              <label for="13">Accion por el clima</label>
                            </p>
                            <p>
                              <input type="checkbox" id="14" />
                              <label for="14">Vida submarina</label>
                            </p>
                            <p>
                              <input type="checkbox" id="15" />
                              <label for="15">Vida de ecosistemas terrestres</label>
                            </p>
                            <p>
                              <input type="checkbox" id="16" />
                              <label for="16">Paz, justicia e instituciones solidas</label>
                            </p>
                            <p>
                              <input type="checkbox" id="17" />
                              <label for="17">Alianzas para lograr los objetivos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="18" />
                              <label for="18">Energia asequible y no contaminant</label>
                            </p>
                            <p>
                              <input type="checkbox" id="19" />
                              <label for="19">Trabajo decente y crecimiento econimico</label>
                            </p>
                            <p>
                              <input type="checkbox" id="19" />
                              <label for="19">Industria, innovacion e insfraestructura</label>
                            </p>
                            <p>
                              <input type="checkbox" id="20" />
                              <label for="20">Reducion de las desigualdes</label>
                            </p>
                            <p>
                              <input type="checkbox" id="21" />
                              <label for="21">Cuidades y comunidades sostenibles</label>
                            </p>
                        </div>
                      
                    </div>
                    <br>
                
                 </div>

                 <section class="form2" style="padding:0!important;background-color: #e0e0e0 ">
                    <div class="row" style="width: 75%; padding-top: 2em; display: flex;flex-wrap: nowrap;">
                        <div class="col s4 option-form">
                          <h2 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1vw;">Descripcion del programa</h2>
                          <div class="input-field">
                            <br>
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Explicar brevemente el proposito del proyecto</label>
                          </div>
                          <br>
                          <div class="input-field">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Mencione las actividades especificas que lleva acabo para cumplir con el proposito del proyecto</label>
                          </div>
                          <br>
                          <div class="input-field">
                            <br>
                            <br>
                            <br>
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">¿Posee video explicativo del programa? De ser asi, anexarlo o indicar link:</label>
                          </div>

                        </div>
                        <div class="col s4 option-form">
                          <h2 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1vw;">Descripcion del programa</h2>
                          <div class="input-field">
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Beneficiarios</label>
                          </div>
                          <br>
                          <div class="input-field ">
                            <br>
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Cantidad de beneficiarios directos del proyecto</label>
                          </div>
                          <br>
                           <div class="input-field ">
                            <br>
                            <br>
                            <br>
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Area Geografica (Departamento, Municipio, Comunidades) en que se desarrolla el proyecto:</label>
                          </div>

                        </div>
                        <div class="col s4 option-form">
                        <h2 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1vw;">Colaboracion</h2>
                        <p style="text-align: left;color:#9E9E9E;font-weight: 400;font-size: 0.8vw;">¿Existen otras instituciones que colaboran en la ejecución del programa? De ser asi identificarlas</p>
                          <div class="input-field">
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Instituciones publicas:</label>
                          </div>
                          <br>
                          <div class="input-field">
                            <br>
                            <input placeholder="" id="name" type="text" class="validate">
                            <label for="nombre">Instituciones privadas:</label>
                          </div>
                          <br>

                        </div>
                    </div>
                 </section>
                   <div class="card text-center" style="z-index: 999; width: 75%;-webkit-box-shadow: 0 2px 2px 0 transparent, 0 1px 5px 0 transparent, 0 3px 1px -2px transparent;">
                     <div class="row">
                       <div class="col s12">
                          <h3 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.2vw;">Impacto</h3>
                          <p style="text-align: left;color:#9E9E9E;font-weight: 400;font-size: 0.8vw;">¿El programa tiene definido indicadores o metricas para la medición del impacto? De ser asi, identificarlas </p>
                          <br>
                          <div class="input-field">
                            <input placeholder="" id="name" type="text" class="validate">
                          </div>
                       </div>
                     </div>
                       <div class="contact-form">
                          <div class="row">
                            <h3 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.2vw;">Información del contacto</h3>
                              <div class="col s6">
                                <div class="input-field col s12">
                                  <input placeholder="Nombre de la persona encargada del proyecto" id="name" type="text" class="validate">
                                  <label for="nombre">Nombre</label>

                                </div>
                                
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input placeholder="Cargo adentro de la organización" id="name" type="text" class="validate">
                                  <label for="nombre">Cargo</label>
                                </div>
                              </div>


                              <div class="col s6">
                                  <div class="input-field col s12">
                                  <input placeholder="Correo dentro de la organización" id="name" type="text" class="validate">
                                  <label for="nombre">Correo</label>
                                </div>
                          
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input placeholder="Url de la organización" id="name" type="text" class="validate">
                                  <label for="nombre">Pagina Web</label>
                                </div>
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input placeholder="telefonos de contacto en la organización" id="name" type="text" class="validate">
                                  <label for="nombre">Telefono</label>

                                </div>
                                
                              </div>
                              </div>

                              </div>
                              <br><br>
                       <div class="col s12" style="float: left">
                  
                  <a class=" btn-large">Enviar</a>
                </div>
                      </div>
                      <br><br><br>
                    </form>
                          </div>
                        
                
            
            
         
        </div>
 

  <footer style="padding: 0!important;background-color: #757575;">
    <div class="row">
        <div class="col s12 footer">
            <p>Fundacion Poma impulsando el Progreso Social | Todos los derechos reservados, 2017</p>
        </div>
    </div>
  </footer>

  </center>
</section>
<?php include("footer.php");?>
</html>