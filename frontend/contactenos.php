<!DOCTYPE html>
<!-- saved from url=(0045)http://fundacionpoma.org/mapaips/contacto.php -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="apple-touch-icon" sizes="76x76" href="http://fundacionpoma.org/mapaips/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="http://fundacionpoma.org/mapaips/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Fundación Poma</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

	

	<!-- CSS Files -->
	<link href="css/material-kit.css" rel="stylesheet">
	<link href="css/site.css" rel="stylesheet">
</head>

<?php include ('header.php');?>
<body class="landing-page" style="">
	

	<div class="wrapper">
		<div class="header" style="background-color: transparent; margin-top: -5%;">
		</div>
		<div class="main main-raised">
			<div>
				<img src="img/banner_contactenos.png" style="height: 100%;width:100%;">
			</div>
			<div class="container" style="margin: 0px;width: 100%;">
				<div class="section text-center section-landing " style="padding: 10px;">
					<center>
					<div class="row" style="padding-top: 90px;padding-bottom: 90px">
						<div class="col-md-12">
							<button class="waves-effect waves-light btn modal-trigger" href="#modal1" style="background-color: #f49715;font-size: 32px;width: 400px; height: 100px;"><img src="img/boton_contacto01.svg" style="padding-right: 15px;">Contáctanos</button>
							<br>
							<a class="btn btn-primary btn-lg" href="formulario.php" style="background-color: #f49715;font-size: 32px;width: 400px;margin-top: 25px;height: 100px;"><img src="img/boton_contacto.svg" style="padding-right: 15px;">Involúcrate</a>
						</div>
					</div>
					</center>
					<center>
					<div class="row" style="padding: 10px;background-color: #00afbe;  height:100px; width: 100%;">
						<div class="row container">
						<div class="col s6">
							<img src="img/logo01.png" style="width: 276px; padding: 22px 40px 40px 40px;">
						</div>
						<div class="col s6 right" style="padding-top: 26px;text-align: -webkit-right;padding-right: 90px;text-align: right;">
								<a href="http://twitter.com/fundacionpoma" target="_blank" style="text-decoration: none;">
									<img src="img/mido_red03.svg" style="padding: 10px;">
								</a> 
								<a href="mailto:mapaips@fundacionpoma.org" target="_blank" style="text-decoration: none;">
									<img src="img/mido_red04.svg" style="padding: 10px;">
								</a> 
						</div>
					</div>
					</div>
					</center>

				</div>
				
			</div>
		</div>
		 <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Modal Header</h4>
		      <div class="col-sm-12">
					<div class="row">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s6">
					          <input placeholder="Nombre" id="Nombre" type="text" class="validate">
					          <label for="first_name">Nombre</label>
					        </div>
					        <div class="input-field col s6">
					          <input placeholder="Organizacion" id="Organizacion" type="text" class="validate">
					          <label for="Organizacion">Organización</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Email" id="email" type="email" class="validate">
					          <label for="email">Email</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Teléfono" id="Telefono" type="text" class="validate">
					          <label for="Telefono">Teléfono</label>
					        </div>
					      </div>
					s</div>
		    </div>
		  </div>
		
	
		<footer class="footer">
			<div class="container" style="margin: 0px 30px 0px;">
				<div class="copyright pull-left">
					Fundación Poma, Impulsando el Progreso Social | Todos los derechos reservados, 2017
				</div>
			</div>
		</footer>

	</div>
<script type="text/javascript">
	 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>

<!--   Core JS Files   -->

</body></html>