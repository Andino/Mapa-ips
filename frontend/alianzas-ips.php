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
              <img src="img/banner_alianzas2.png" style="height: 100%;width:100%;">
        
      </div>
      </div>
      
      <div style="display: flex;flex-wrap: nowrap;position: relative;width: 100%;">
        <div class="col s4 our-info">
           <img src="img/fundemas_logo.png" alt="" width="250">
        </div>
        <div class="col s8">
          <div class="alianzas-info">
            <p>FUNDEMAS es una organización dedicada a promover la RSE y la sostenibilidad, desde el año 2000, como una manera en que las empresas pueden contribuir al desarrollo sostenible de el Salvador, en los aspectos sociales, económicos y ambientales. </p>

          <p>FUNDEMAS es una organización dedicada a promover la RSE y la sostenibilidad, desde el año 2000, como una manera en que las empresas pueden contribuir al desarrollo sostenible de el Salvador, en los aspectos sociales, económicos y ambientales. </p>

          <p>El Mapa de Iniciativas Sociales no solo permitirá dar a conocer estos esfuerzos, sino que además contribuirá motivar a que otras empresas realicen estas acciones en beneﬁcio de El Salvador.</p>
          <br>
           <div class="social-link" style="display: flex;">
            <a href="http://fundemas.blogspot.com/" target="_blank"><img src="img/iconos/blog.png" alt="" class="responsive-img"></a>
             <a href="https://twitter.com/FUNDEMAS" target="_blank"><img src="img/iconos/tw.png" alt="" class="responsive-img"></a>
              <a href="https://www.facebook.com/fundemas" target="_blank"><img src="img/iconos/fb.png" alt="" class="responsive-img"></a>
          </div>
          </div>
         
          
        </div>
    </div>

      </div>  

    </div>
    <section class="allies" style="">
      <div class="row" style="margin-left: 10%;margin-right: 10%; display: flex;flex-wrap: nowrap;margin-bottom: 0!important">
          <div class="col s6" style="text-align: right;flex-direction: column;">
            <h1 class="text-blue" style="text-transform: uppercase;font-size: 3.5vw;letter-spacing: 0.1px;">Organizaciones</h1>
            <h1 class="text-blue" style="text-transform: uppercase;font-size: 3.5vw;line-height: 1px;">Aliadas</h1>
          </div>

          <div class="col s6">
             <img src="img/logos_alianzas.jpg" alt="" width="100%">
          </div>
      </div>
    </section>
    
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