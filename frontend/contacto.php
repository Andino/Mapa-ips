<!DOCTYPE html>
<html lang="en">

<?php include ('header.php'); 
  $state="";
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $actual_link2 = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($actual_link2 == $actual_link."/Mapa-ips/frontend/contacto.php?s=cs" || $actual_link2 == $actual_link."/Mapa-ips/frontend/contacto.php?s=ci"){
    $state = $_GET["s"];
  }
?>
  
<body style="background: white;">
 <style type="text/css">
   .dropdown-content{
    background-color: white!important;
   }
   .dropdown-content li span{
      color: black!important;
   }
 </style> 

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
            <?php
            if($state=="cs"){
              echo '
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a class="active" href="#test1">Contáctanos</a>
              </li>
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a href="#test2">Involúcrate</a>
              </li>';
            }
            else if($state=="ci"){
              echo '
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a href="#test1">Contáctanos</a>
              </li>
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a class="active"  href="#test2">Involúcrate</a>
              </li>';
            }
            else{
              echo '
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a class="active" href="#test1">Contáctanos</a>
              </li>
              <li class="tab col s3" style="display: flex;justify-content: center;align-items: center;margin-left: 0!important;">
                <a href="#test2">Involúcrate</a>
              </li>';
            }
            ?>
          </ul>
        </div>
        <div id="test1" class="col s12">
          <div class="contact-form">
            <div class="row">
              
            <form class="col s12" method="POST" action="includes/sendmail.php">
              <div class="row"><h2  style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.5vw;">Informacion de contacto</h2>
                <div class="input-field col s6">
                  <input placeholder="" id="name" name="name" type="text" class="validate" required>
                  <label for="name">Nombre</label>
                </div>
    
                <div class="input-field col s6">
                  <input placeholder="" id="email" name="email" type="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <br><br>
             <div class="row">
                <div class="input-field col s6">
                  <input placeholder="" id="name" type="text" name="org" class="validate" required>
                  <label for="org">Organizacion</label>
                </div>

                <div class="input-field col s6">
                  <input placeholder="" id="email" name="phone" type="text" class="validate" required>
                  <label for="phone">Telefono</label>
                </div>
              </div>
              <br><br>

              <div class="row">
                <div class="input-field col s12">
                  <textarea placeholder="Escriba su mensaje" name="message" id="textarea1" class="materialize-textarea" required></textarea>
                  <label for="message">Mensaje</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  
                  <input type="submit" name=""  class=" btn-large" value="Enviar">
                </div>
              </div>
            </form>
          </div>
            <?php 
              echo "<script>$('html, body').animate({scrollTop:$(document).height()}, 'slow');</script>";
              if($state=="cs"){
                echo "<center><h4 style='color:#4BB543'>Formulario enviado con éxito</h4></center>";
              }
            ?>
          </div>
        </div>




        </div>

    </div>
            <div id="test2" class="col s12 involucrate-form">
            <form method="post" action="includes/sendform.php">
                <div class="row" style="width: 75%;">
                    <div class="col s4">
                        <h5 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.5vw;">Datos Generales</h5>
                        <br>
                          <div class="input-field">
                            <input placeholder="" id="name" name ="name" type="text" class="validate" required>
                            <label for="nombre">Nombre del programa:</label>
                          </div>
                            <br><br>
                          <div class="input-field">
                            <input placeholder="" id="name" type="text" name ="nameorg" class="validate" required>
                            <label for="nombre">Nombre de Organización:</label>
                          </div>
                          <br>
                            <div class="input-field col s12">
                              <br>
                              <select name="clasif" required>
                                <option style="font-size: 1vw;color: #757575!important" value="Empresa Privada">Empresa Privada</option>
                                <option style="font-size: 1vw;color: #757575!important" value="ONG">ONG</option>
                                <option style="font-size: 1vw;color: #757575!important" value="Asocio público-privado">Asocio público-privado</option>
                                <option style="font-size: 1vw;color: #757575!important" value="Fundación privada sin fines de lucro">Fundación privada sin fines de lucro</option>
                              </select>
                              <label style="font-size: 1vw;">Clasificacion de la organizacion que ejecuta el programa:</label>
                              <br><br>
                          </div> 
                          <br>

                      
                        <div class="input-field col s12">
                          <textarea placeholder="Actividad principal de la organizacion:" id="textarea1" class="materialize-textarea" name="actprinc"></textarea required>
                          <label for="textarea1">Actividad principal de la organización</label>
                        </div>
                    </div>

                    <div class="col s8">
                        <h5 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.3vw;">Objetivos de desarrollo sostenible a los que contribuye</h5>
                        <div class="col s6 check-form">
                             <p>
                              <input type="checkbox" id="1" value="Fin de la pobreza" name="1"/>
                              <label for="1">Fin de la pobreza</label>
                            </p>
                            <p>
                              <input type="checkbox" id="2" value="Hambre y cero" name="2"/>
                              <label for="2">Hambre y cero</label>
                            </p>
                            <p>
                              <input type="checkbox" id="3" value="Salud y bienestar" name="3"/>
                              <label for="3">Salud y bienestar</label>
                            </p>
                            <p>
                              <input type="checkbox" id="4" value="Educacion de calidad" name="4"/>
                              <label for="4">Educacion de calidad</label>
                            </p>
                            <p>
                              <input type="checkbox" id="5" value="Igualdad de genero" name="5"/>
                              <label for="5">Igualdad de genero</label>
                            </p>
                            <p>
                              <input type="checkbox" id="6" value="Agua limpia y sanamiento" name="6"/>
                              <label for="6">Agua limpia y sanamiento</label>
                            </p>
                            <p>
                              <input type="checkbox" id="7" value="Energia asequible y no contaminante" name="7"/>
                              <label for="7">Energia asequible y no contaminante</label>
                            </p>
                            <p>
                              <input type="checkbox" id="8" value="Trabajo decente y crecimiento econimico" name="8"/>
                              <label for="8">Trabajo decente y crecimiento econimico</label>
                            </p>
                            <p>
                              <input type="checkbox" id="9" value="Industria, innovacion e insfraestructura" name="9"/>
                              <label for="9">Industria, innovacion e insfraestructura</label>
                            </p>
                            <p>
                              <input type="checkbox" id="10" value="Reducion de las desigualdes" name="10"/>
                              <label for="10">Reducion de las desigualdes</label>
                            </p>
                            <p>
                              <input type="checkbox" id="11" value="Cuidades y comunidades sostenibles" name="11"/>
                              <label for="11">Cuidades y comunidades sostenibles</label>
                            </p>
                        </div>
                        <div class="col s6 check-form">
                            <p>
                              <input type="checkbox" id="12" value="Produccion y consumo responsable" name="12"/>
                              <label for="12">Produccion y consumo responsable</label>
                            </p>
                            <p>
                              <input type="checkbox" id="13" value="Accion por el clima" name="13"/>
                              <label for="13">Accion por el clima</label>
                            </p>
                            <p>
                              <input type="checkbox" id="14" value="Vida submarina" name="14"/>
                              <label for="14">Vida submarina</label>
                            </p>
                            <p>
                              <input type="checkbox" id="15" value="Vida de ecosistemas terrestres" name="15"/>
                              <label for="15">Vida de ecosistemas terrestres</label>
                            </p>
                            <p>
                              <input type="checkbox" id="16" value="Paz, justicia e instituciones solidas" name="16"/>
                              <label for="16">Paz, justicia e instituciones solidas</label>
                            </p>
                            <p>
                              <input type="checkbox" id="17" value="Alianzas para lograr los objetivos" name="17"/>
                              <label for="17">Alianzas para lograr los objetivos</label>
                            </p>
                            <p>
                              <input type="checkbox" id="18" value="Energia asequible y no contaminant" name="18"/>
                              <label for="18">Energia asequible y no contaminant</label>
                            </p>
                            <p>
                              <input type="checkbox" id="19" value="Trabajo decente y crecimiento econimico" name="19"/>
                              <label for="19">Trabajo decente y crecimiento econimico</label>
                            </p>
                            <p>
                              <input type="checkbox" id="20" value="Industria, innovacion e insfraestructura" name="20"/>
                              <label for="20">Industria, innovacion e insfraestructura</label>
                            </p>
                            <p>
                              <input type="checkbox" id="21" value="Reducion de las desigualdes" name="21"/>
                              <label for="21">Reducion de las desigualdes</label>
                            </p>
                            <p>
                              <input type="checkbox" id="22" value="Cuidades y comunidades sostenibles" name="22"/>
                              <label for="22">Cuidades y comunidades sostenibles</label>
                            </p>
                        </div>
                      
                    </div>
                    <br>
                
                 </div>

                 <section class="form2" style="padding:0!important;background-color: #e0e0e0 ">
                    <div class="row" style="width: 75%; display: flex;flex-wrap: nowrap;">
                        <div class="col s4 option-form">
                          <h2 style="text-align: left;color:#424242;font-weight: bolder;font-size: 1.2vw;">Descripcion del programa</h2>
                          <div class="input-field">
                            <p for="nombre">Explicar brevemente el proposito del proyecto</p>
                            <input placeholder="" name="purpose" id="name" type="text" class="validate"  required>
                            
                          </div>
                          <br>
                          <div class="input-field">
                              <p for="nombre">  Mencione las actividades especificas que lleva acabo para cumplir con el proposito del proyecto</p>
                            <input placeholder="" id="name" type="text" name="actesp" class="validate" style="" required>
                          
                          </div>
                          <br>
                          <div class="input-field">
                             <p for="nombre">¿Posee video explicativo del programa? De ser asi, anexarlo o indicar link:</p>
                            <input placeholder="" id="name" type="text" name="urlmedia" class="validate" required style="margin-top:   5%;">
                           
                          </div>

                        </div>
                        <div class="col s4 option-form">
                          <h2 style="text-align: left;color:#424242;font-weight: bolder;font-size: 1.2vw;">Descripcion del programa</h2>
                          
                        
                          <div class="input-field ">
                            <p for="nombre">Cantidad de beneficiarios directos del proyecto</p>
                            <input placeholder="" id="name" name="benef" type="text" class="validate" required>
                            
                          </div>
                          
                           <div class="input-field ">
                          <p for="nombre">Area Geografica (Departamento, Municipio, Comunidades) en que se desarrolla el proyecto:</p>
                            <input placeholder="" id="name" type="text" name="geo" class="validate" required>
                           
                          </div>

                        </div>
                        <div class="col s4 option-form">
                        <h2 style="text-align: left;color:#424242;font-weight: bolder;font-size: 1.2vw;">Colaboracion</h2>
                        <p style="text-align: left;color:#9E9E9E;font-weight: 400;font-size: 0.9vw;">¿Existen otras instituciones que colaboran en la ejecución del programa? De ser asi identificarlas</p>
                        <br>
                          <div class="input-field">
                            <br>
                            <input name="publi" placeholder="" id="name" type="text" class="validate" required>
                            <label for="nombre">Instituciones publicas:</label>
                          </div>
                          <br>
                          <div class="input-field">
                            <br>
                            <input name="priv" placeholder="" id="name" type="text" class="validate" required>
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
                            <input name="metric" placeholder="" id="name" type="text" class="validate" required>
                          </div>
                       </div>
                     </div>
                       <div class="contact-form">
                          <div class="row">
                            <h3 style="text-align: left;color:#757575;font-weight: bolder;font-size: 1.2vw;">Información del contacto</h3>
                              <div class="col s6">
                                <div class="input-field col s12">
                                  <input required name="nameenc" placeholder="Nombre de la persona encargada del proyecto" id="name" type="text" class="validate">
                                  <label for="nombre">Nombre</label>

                                </div>
                                
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input name="position" placeholder="Cargo adentro de la organización" id="name" type="text" class="validate" required>
                                  <label for="nombre">Cargo</label>
                                </div>
                              </div>


                              <div class="col s6">
                                  <div class="input-field col s12">
                                  <input name="contmail" placeholder="Correo dentro de la organización" id="name" type="text" class="validate" required>
                                  <label for="nombre">Correo</label>
                                </div>
                          
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input name="urlweb" placeholder="Url de la organización" id="name" type="text" class="validate" required>
                                  <label for="nombre">Pagina Web</label>
                                </div>
                                <div class="input-field col s12" style="margin-top: 4em!important;">
                                  <input name="phone" placeholder="telefonos de contacto en la organización" id="name" type="text" class="validate" required>
                                  <label for="nombre">Telefono</label>

                                </div>
                                
                              </div>
                              </div>

                              </div>
                              <br><br>
                       <div class="col s12" style="float: left">
                  
                  <input type="submit" name=""  class=" btn-large" value="Enviar">
                </div>
                      </div>
                      <br><br><br>
                    </form>
                        <?php 
                          echo "<script>$('html, body').animate({scrollTop:$(document).height()}, 'slow');</script>";
                          if($state=="ci"){
                            echo "<center><h4 style='color:#4BB543'>Formulario enviado con éxito</h4></center>";
                          }
                        ?>
                  </div>
                
            
            
         
        </div>
 
            <script type="text/javascript">
            jQuery(document).ready(function($){
              // Get current path and find target link
              var path = window.location.pathname.split("/").pop();
              
              // Account for home page with empty path
              if ( path == '' ) {
                path = 'index.php';
              }
                  
              var target = $('nav a[href="'+path+'"]');
              // Add active class to target link
              target.addClass('active');
            });

            </script>
  <footer style="padding: 0!important;background-color: #757575;">
    <div class="row" style="margin-bottom: 0!important;">
        <div class="col s12 footer">
            <p>Fundacion Poma impulsando el Progreso Social | Todos los derechos reservados, 2017</p>
        </div>
    </div>
  </footer>

  </center>
</section>

</html>