
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fundación Poma </title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
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
      <a href="index.php"><img  class="img-responsive flex-img" alt="Responsive image" src="img/big_logo.png"></a>
      <img class="right img-responsive flex-img2" alt="Responsive image" src="img/slogan.png">
        
    </div>
  </div>
   <nav class="snavbar">
    <div class="nav-wrapper navbarcustom"  style="" id="navbarNav">
    
      <ul class="nav-mobile customul" style="">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">INICIATIVAS POR MUNICIPIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iniciativasnac.php">INICIATIVAS NIVEL NACIONAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade.php">ACERCA DEL IPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alianzas2.php">ALIANZAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactenos.php">CONTACTO</a>
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
            <input class="input-header" style="width:160px;" placeholder="Departamento, Municipio, Organización" id="search" name="sbar" type="text" class="validate">
        </div>
        </form>
       </li>
      </ul>
      
    </div>
  </nav>
  <body class="body-overlay">
