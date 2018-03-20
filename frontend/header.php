
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Fundación Poma </title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/newpages.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });


    </script>


  </head>
  <style type="text/css">
    a{text-decoration: none!important;}
  </style>
  <div class="pnavbar">
    <div >
      <div style="height: 6px; width: 100%;"></div>
      <a href="index.php"><img  class="flex-img" alt="Responsive image" src="img/big_logo.png"></a>
      <img class="right flex-img2" alt="Responsive image" src="img/slogan.png">
        
    </div>
  </div>
   <nav class="snavbar">
    <div class="nav-wrapper navbarcustom"  style="" id="navbarNav">
    
      <ul class="customul" id="cssmenu" style="">
        <li class="nav-item">
          <a href="index.php">INICIATIVAS POR MUNICIPIO</a>
        </li>
        <li class="nav-item">
          <a class="" href="iniciativasnac.php">INICIATIVAS NIVEL NACIONAL</a>
        </li>
        <li class="nav-item">
          <a class="" href="acerca.php">ACERCA DEL IPS</a>
        </li>
        <li class="nav-item">
          <a class="" href="#">ALIANZAS</a>
        </li>
        <li class="nav-item">
          <a class="" href="#">CONTACTO</a>
        </li>
        <li style="width: 20px;">
       </li>
        <li style="margin-left: 20px; width: 130px;">
          <form method="post" action="search.php">
            <div class="input-field col s6 selinput" style="">
              <select name="taskOption">
                <option value="" disabled selected><span>Selecciona un servicio</span></option>
                <option value="Necesidades Basicas">Necesidades Basicas</option>
                <option value="Fundamentos de Bienestar">Fundamentos de Bienestar</option>
                <option value="Oportunidades">Oportunidades</option>
              </select>
              <i class="fas fa-angle-down arrowicon" style=""></i>
            </div>
       </li>
        <li><label for="subutton"><i class="fas fa-search sinput" style="color: white;"></i></label>
          <input style="display: none;" type="submit" id="subutton" name="subutton"></li>
       <li>
        
          <div class="input-field input">
            <input class="input-header" style="width:180px;" placeholder="Departamento, Municipio, Organización" id="search" name="sbar" type="text" class="validate">
        </div>
        </form>
       </li>
      </ul>
      
    </div>
  </nav>
  <body class="body-overlay">
