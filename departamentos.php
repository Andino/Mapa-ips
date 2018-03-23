<!DOCTYPE html>
<html>

    <!-- Add IntroJs styles -->
    <link href="introjs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

<?php include ('header.php');
include ('cms/classes/DB.class.php'); 
 $id=$_GET['n'];
 if(!isset($id)){
 	header("location:index.php");
 }
	 if (file_exists('cms/config.php')) {
		require_once 'cms/config.php'; 
		require_once 'cms/version.php'; 
	}else{
		header("Location: installation");
		exit();
	}
 	$db = new DB(); 
?>


<style type="text/css">
	.fsection{
		 
		color: white;  
		margin-left: 20px!important;
		max-width: 100%;
	}
	.fsection img{
		margin: 10px !important;
	}
	.fsection h4{
		font-size: 14px; 
		font-weight: bold; 
		text-align: left; 
		margin-bottom: -20px;
	}
	.fsection h1{
		font-size: 1.2vw; 
		font-weight: bold; 
		text-align: left;
	}
	.fsection p{
		text-align: left; 
		font-size: 0.7vw!important;
		font-weight: 300;
	}

	.fsection-info{
		
		position: relative!important;
		
		height: 10%;


	}
	.ssection{
		
		margin-top: 47px !important;
	}
	.ssection .responsive{
		top: 13%;
	}

	.text-apartament{
    display:flex;

	}
.responsive{
	width: 200px;
    height: 100%;
    object-fit: cover;
}

.text-apartament * {
    margin-top:auto;
    margin-bottom:auto;
}

.name-apartament{
	font-size: 25px;
	font-family: 'Roboto';
	font-weight: bolder;
	color: #f49715;
	text-transform: uppercase;
	margin-left:10px;
}
	
.nav-option{
	
}
.comnav{
	border-radius: 5px;
	margin-left: 10px;
}

.menu-category{


 width: 60vh;
	
}
.container-maps{
	
}

.right-align{
	position: static!important;
	/*width: 100%;*/
	
	margin-top: -3em;
	z-index: 1;
	display: grid;
	grid-template-columns: repeat(3,150px);
	padding: 5px;
}

.stadistic{
	
	
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.stadistic p{
	color: #9e9e9e;
	font-size: 10.5px;

}

.sta-1{
	margin-left: -2.1em;
}




</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body container-maps">
	
      <div class="row" style="display: flex;flex-wrap: nowrap;"> 


         <div class="fsection fsection-info" style="display: flex;justify-content: initial;align-items: center;" >
	         	<div style="display: flex;justify-content: center;flex-direction: column;background-color: #00afbe;padding:15px;width: 25em;">
	         		<?php
		         		$prueba=$db->selectSpecific("nombre_dep", "departamento", "nombre_dep like '$id'");
						foreach ($prueba as $key) {
							if($id=="ahuachapán"){
								echo '<img src="img/depto-sideb/ahuachapan.svg" width="200">';
							}
							else if($id=="cabañas"){
								echo '<img src="img/depto-sideb/cabanas.svg" width="200">';
							}
							else if($id=="cuscatlán"){
								echo '<img src="img/depto-sideb/cuscatlan.svg" width="200">';
							}
							else if($id=="la unión"){
								echo '<img src="img/depto-sideb/la union.svg" width="200">';
							}
							else if($id=="morazán"){
								echo '<img src="img/depto-sideb/morazan.svg" width="200">';
							}
							else if($id=="usulután"){
								echo '<img src="img/depto-sideb/usulutan.svg" width="200">';
							}
							else{
								echo '<img src="img/depto-sideb/'.strtolower($key["nombre_dep"]).'.svg" width="200">';
							}
						}
		         	?>
		         	
		         	<h4>Midiendo el</h4>
		         	<h1>Progreso Social</h1>
		         	<p>El modelo del Progreso Social se fundamenta en una visión holística y rigurosa de las condiciones sociales y ambientales de las sociedades. Tanto el modelo como la metodología del Índice de Progreso Social son el resultado de un proceso colaborativo de investigación en el que se ha recurrido a una amplia gama de académicos y expertos en políticas.
		         	<br>
		         	<br>
		         	El modelo sintetiza el amplio conjunto de investigaciones en numerosos campos, a fin de identificar las múltiples dimensiones del desempeño social y ambiental de las sociedades.</p>
	         </div>
         </div> 



         <div  class="col s4 ssection map-depart" style="margin-left: 10px!important;">
         	<?php
         		$prueba=$db->selectSpecific("nombre_dep", "departamento", "nombre_dep like '$id'");
				foreach ($prueba as $key) {
					echo '	<div class="text-apartament">
    					<a   href="index.php"><img src="img/left-arrow.png" alt="left"></a><span class="name-apartament">'.$key["nombre_dep"].'&nbsp;&nbsp;<a  href="javascript:void(0);" onclick="javascript:introJs().start();"><i class="animated tada infinite far fa-question-circle"></i></a></span>

</div>';
				}
         	?>


<div id="map-svg" data-step="2" data-intro="Al haber seleccionado un componente ips podremos ver las zonas/municipios en las cuales se estan desarrolloando proyectos referentes a dicho componente, de distinto color"  data-position="left">


	<?php
	if($id == "usulután"){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="80 -90 1450 1540" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
	<?php
	}else if($id=="chalatenango"){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 -150 1860 1740" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
	
	<?php
	}else if($id == "cabañas" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 -300 1300 1440" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "san salvador" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 2 1000 1140" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "santa ana" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 0 950 1240" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "ahuachapán" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 80 1000 1100" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "sonsonate" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 100 900 1000" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "la libertad" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="20 -20 1100 1200" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
		<?php
	}else if($id == "cuscatlán" ){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="-30 20 1600 1740" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
	<?php
	}else if($id == "cuscatlán" || $id == "la unión" || $id == "san miguel" || $id == "morazán"){?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="40 60 1610 1840" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="600">
		<style type="text/css">
		.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
		.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
		</style>
		<?php
		$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
		inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
		foreach ($prueba as $key) {
		if($key["tag"] == "path"){
				echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
		}
		else if($key["tag"] == "polygon"){
				echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
		}
		}?>
		
	</svg>
	<?php
	}else{
	?>
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="20 60 1310 1290" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="620">
	<style type="text/css">
	.st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
	.st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
	.st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
	</style>
	<?php
	$prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
	inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$id'");
	foreach ($prueba as $key) {
	if($key["tag"] == "path"){
			echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
	}
	else if($key["tag"] == "polygon"){
			echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';	
	}
	}?>
	
</svg>
<?php } ?>

</div>   


         </div> 
	



         <div class="col s4 menu-category" style="display: flex; justify-content: center; align-items: center;flex-direction: column;margin-left: 1%!important; padding-top: 1em;">
         	<style type="text/css">
         		.ulcontent {
         			margin: 0px;
         		}
         		.ulcontent li a{
         			
         			text-align: center;
         			
         			color: #085eaa!important
         		}
         		.active-blue{
         			background-color: #42A5F5!important;
         			height: 350px;
         		}
         		.active-orange{
         			background-color: #ff9800!important;
         			
         			color: white;
         			height: 350px;
         		}
         		.active-green{
         			background-color: #8bc34a!important;
         			color: white;
         			height: 350px;
         		}
         	
         		.option-map{
         			background: #1e88e5;
         			height: 120px;
					cursor: pointer;
					display: flex;
					justify-content: center;

         		}
         		.ulcontent li a:hover{
         			background-color: transparent;
         		}
         		.border{
         			border-top-left-radius:5px;
         			border-bottom-left-radius: 5px;
         		}
         		.border1{
         			border-top-right-radius:5px;
         			border-bottom-right-radius: 5px;
         		}
         		.comnav{
         			height: 100px; 
         			margin-top: 100px; 
         			background-color: transparent!important; 
         			width:387px; 
         			position: absolute; 
         			left:67%;
         			box-shadow: 0 0 0 transparent;
         		}
         		.content-sidemenu{
         			margin-top: 140px!important;
         		}
         		.dropdown-content li a{
         			color: #9e9e9e;
         			font-family: 'Roboto', sans-serif;
         			font-size: 10.5px!important;
         			font-weight: 500;
         			height: 100%;
         			margin-top: 0px;
         			text-align: left;
         			line-height: 12.5px;
         			letter-spacing: 0.5px;
         			
         		}
         		.dropdown-content li:hover{
         			background: #E0E0E0!important;
         		}
         		.responsive{
						width: 500px;
						position: static;
					}

					.option-map {
						display: flex;
						justify-content: center;
						height: 100%;
						align-items: center;
					}
					.option-map img{
						width: 40%;
					}
	
					.padre{
						border-radius: 5px;
						
					}
					.hijo{
						display: grid;
						box-sizing: border-box;
						 grid-template-columns: repeat(3,2fr);
						
					}
					.sub-hijo{
						 background-color: rgb(0,126,193);
						 height: 100%;
						 display: flex; 
						 justify-content: center;
						 align-items: center;
						 flex-direction: column;
						 padding: 10px;
						 width: 140px;
						 cursor: pointer; 
					}

					.sub-hijo:hover{
						filter: brightness(130%);
						transition-duration: 1s;
					}
					.sub-hijo p{
						color: white;
						font-family: 'Roboto', sans-serif;
						font-size: 15px; 
					}
					.sub-hijo img{
						width: 50%;
					}
					.sub-hijo svg{
						width: 50%;
					}

					@media screen and (max-width:1000px ){
						.right-align{
							grid-template-columns: auto!important;
						}
							.hijo{
						display: grid;
						box-sizing: border-box;
						 grid-template-columns: auto!important;
						 grid-gap: 10px;
						
						}
						.border{
	         			border-top-left-radius:5px;
	         			border-top-right-radius: 5px;
			         	}
		         		.border1{
		         			border-bottom-left-radius:5px;
		         			border-bottom-right-radius: 5px;
		         		}
						.stadistic{
							height: 100%;
							display: flex;
							justify-content: flex-start;
							align-items: baseline;
							flex-direction: column;

						}
						.sta-1{
							margin-left: 0px;
						}
						.row .menu-category{
							width: 35.333333%!important;
						}

						.sub-hijo .icon-subhijo{
							display: none;
						}
					}

				@media screen and( max-width: 1920px){


					.padre{
						margin-top: -200px;
						
					}

					.comnav{
						height: 100px; 
						margin-top: 150px; 
						margin-left: 120px;
						background-color: #1e88e5; 
						width:419px; 
						position: absolute; 
						left:60%;
					}
					
				

				}
				@media screen and (max-width: 1066px) {


					.comnav{
						height: 100px; 
						margin-top: 150px; 
						margin-left: 120px;
						background-color: #1e88e5; 
						width:346px;
						top:-10%; 
						position: absolute; 
						left:48%;
					}
					.dropdown-content li a{
	         			height: 40px;
	         			margin-top: 0px;
	         			font-size: 7px;
	         			text-align: left;
	         			line-height: 12px;
	         		}
	         		.responsive{
						
				
					}
         		}
				@media screen and (max-width: 1366px) {

					.fsection-info{
						width: 26%!important
					}

					.map-depart{
						left:-5em!important;
					}
					.responsive{
						width: 450px;
					}
			
					.hijo{

					}
				}
         	</style>

         	<ul id="dropdown1" class="dropdown-content content-sidemenu" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;border:1px solid #039be5;">
			  <li><a  class="bouton">Nutricion y Asistencia Medica Basica</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Agua y Saneamiento</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Vivienda</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Seguridad personal</a></li>
			</ul>
			<ul id="dropdown2" class="dropdown-content content-sidemenu" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;border:1px solid #ff9800;">
			  <li><a class="bouton">Acceso a Conocimientos Básicos</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Acceso a Información y Comunicaciones</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Salud y Bienestar</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Sustentabilidad del Ecosistema</a></li>
			</ul>
			<ul id="dropdown3" class="dropdown-content content-sidemenu" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important; border:1px solid #8bc34a;">
			  <li><a class="bouton">Derechos Personales</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Libertad Personal y de Elección</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Tolerancia e Inclusión</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Educación Superior</a></li>
			</ul>

<div class="fixed-action-btn container">
			  
			</div>
			  <div  data-step="1" data-intro="Para mostrar la Información primero selecciona un servicio y luego un componente" class="padre nav-option" data-position="top" style="margin-right: 0;">
			  		<div class="hijo">
			  			<a class="dropdown-button" data-activates="dropdown1">
			  			<div class="sub-hijo 1 border">
			  				<svg xmlns="http://www.w3.org/2000/svg" viewBox="1320 1560 60 60">
							  <defs>
							    <style>
							      .cls-1 {
							        fill: white;
							      }
							    </style>
							  </defs>
							  <path id="necesidades_basicas" data-name="necesidades basicas" class="cls-1" d="M1-1066a.945.945,0,0,1-1-1v-29a.907.907,0,0,1,.3-.7l6.7-6.7V-1118a.944.944,0,0,1,1-1h8a.945.945,0,0,1,1,1v4.6l12.3-12.3a.967.967,0,0,1,1.4,0l29,29a.9.9,0,0,1,.3.7v29a.945.945,0,0,1-1,1Zm8-37a.908.908,0,0,1-.3.7L2-1095.6v27.6H58v-27.6l-28-28-13.3,13.3a.914.914,0,0,1-1.1.2.875.875,0,0,1-.6-.9v-6H9Zm2,33v-2H6v2H4v-10H6v2h5v-2h2v2H32a.945.945,0,0,1,1,1v1H47v2H33v1a.945.945,0,0,1-1,1H13v2Zm18-4h2v-2H29Zm-4,0h2v-2H25Zm-4,0h2v-2H21Zm-4,0h2v-2H17Zm-4,0h2v-2H13Zm-7,0h5v-2H6Zm38.4-6.4a1.932,1.932,0,0,0-2.8,0,4.109,4.109,0,0,1-4.9.6A11.822,11.822,0,0,1,31-1090a11.822,11.822,0,0,1,5.7-10.2,3.937,3.937,0,0,1,4.9.6c.1.1.2.1.3.2-.5-2.2-1.9-4.6-3.9-4.6v-2c3.4,0,5.5,3.7,5.9,6.7.2,0,.4-.2.5-.3a4.11,4.11,0,0,1,4.9-.6A11.821,11.821,0,0,1,55-1090a11.822,11.822,0,0,1-5.7,10.2,3.6,3.6,0,0,1-2,.6A4,4,0,0,1,44.4-1080.4Zm-6.6-18.1a10.025,10.025,0,0,0-4.8,8.6,9.857,9.857,0,0,0,4.8,8.5,2.017,2.017,0,0,0,2.4-.4A3.63,3.63,0,0,1,43-1083a3.927,3.927,0,0,1,2.8,1.1,1.868,1.868,0,0,0,2.4.4A9.858,9.858,0,0,0,53-1090a9.86,9.86,0,0,0-4.8-8.5,2.018,2.018,0,0,0-2.4.4,3.783,3.783,0,0,1-2.8,1.2,3.948,3.948,0,0,1-2.8-1.2,2.187,2.187,0,0,0-1.512-.678A1.512,1.512,0,0,0,37.8-1098.5ZM11-1082a.945.945,0,0,1-1-1v-10H8a.945.945,0,0,1-1-1v-4a.944.944,0,0,1,1-1h7a.945.945,0,0,1,1,1,2.006,2.006,0,0,0,2,2,2.006,2.006,0,0,0,2-2,.945.945,0,0,1,1-1h7a.944.944,0,0,1,1,1v4a.945.945,0,0,1-1,1H26v10a.945.945,0,0,1-1,1Zm-2-13h2a.945.945,0,0,1,1,1v10H24v-10a.945.945,0,0,1,1-1h2v-2H21.9a4.078,4.078,0,0,1-3.9,3,3.989,3.989,0,0,1-3.9-3H9Z" transform="translate(1320 2686)"/>
							</svg>

			  				<p>Necesidades Basicas</p>
			  			</div>
						</a>

						<a class="dropdown-button" data-activates="dropdown2">
			  			<div class="sub-hijo 2" style="">
			  				<svg xmlns="http://www.w3.org/2000/svg" viewBox="1472 1566.306 98 54.494">
							  <defs>
							    <style>
							      .cls-2 {
							        fill: none;
							        stroke: white;
							        stroke-linecap: round;
							        stroke-linejoin: round;
							        stroke-miterlimit: 10;
							        stroke-width: 2px;
							      }
							    </style>
							  </defs>
							  <g id="fundamentos" transform="translate(39 1119)">
							    <path id="Path_25" data-name="Path 25" class="cls-2" d="M.5,22.3H13.684c5.273,0,11.266,2.037,16.779,4.914,3.236,1.678,9.348,5.393,9.348,5.393" transform="translate(1433.5 452.133)"/>
							    <path id="Path_26" data-name="Path 26" class="cls-2" d="M.5,34.3H12.485c6.712,0,13.184,3.236,19.416,6.352,5.873,2.876,11.386,5.633,16.539,5.633s10.667-2.757,16.419-5.633C71.092,37.536,77.564,34.3,84.4,34.3H96.5" transform="translate(1433.5 454.515)"/>
							    <path id="Path_27" data-name="Path 27" class="cls-2" d="M.5,28.12H12.485c6.712,0,13.184,3.236,19.416,6.232,5.873,2.876,11.386,5.633,16.539,5.633s10.667-2.757,16.419-5.633C71.092,31.236,77.564,28,84.4,28H96.5" transform="translate(1433.5 453.264)"/>
							    <path id="Path_28" data-name="Path 28" class="cls-2" d="M47.7,32.607s5.993-3.715,9.348-5.393C62.561,24.337,68.674,22.3,73.827,22.3H87.011" transform="translate(1442.869 452.133)"/>
							    <path id="Path_29" data-name="Path 29" class="cls-2" d="M55.019.5C50.225.5,44.113,7.811,44.113,7.811S38,.5,33.206.5a10.939,10.939,0,0,0-7.431,18.936h0l18.337,17.5,18.1-17.258a11.058,11.058,0,0,0,3.835-8.27A11.129,11.129,0,0,0,55.019.5Z" transform="translate(1437.827 447.806)"/>
							  </g>
							</svg>
			  				<p>Fundamentos de Bienestar</p>
			  			</div>
						</a>

						<a class="dropdown-button" data-activates="dropdown3">
			  			<div class="sub-hijo 3 border1">
			  				<svg xmlns="http://www.w3.org/2000/svg" viewBox="1669.758 1566.306 56.818 54.494">
							  <defs>
							    <style>
							      .cls-11 {
							        fill: rgba(0,0,0,0);
							      }

							      .cls-11, .cls-22 {
							        stroke: white;
							        stroke-linecap: round;
							        stroke-linejoin: round;
							        stroke-miterlimit: 10;
							        stroke-width: 2px;
							      }

							      .cls-22 {
							        fill: none;
							      }
							    </style>
							  </defs>
							  <g id="oportunidades" transform="translate(0 1126)">
							    <path id="Union_6" data-name="Union 6" class="cls-11" d="M23.861-1073.506h7.222Zm-2.794-4.352H34ZM34-1083.685v1.89Zm-12.935.025v1.865Zm-9.677-14.774A16.114,16.114,0,0,1,27.5-1114.547a16.114,16.114,0,0,1,16.113,16.113,16.112,16.112,0,0,1-9.576,14.73l-13.01.031A16.115,16.115,0,0,1,11.39-1098.434Zm37.714,0h5.714Zm-49.1,0H5.714Zm47.345-19.843-4.459,4.522Zm-39.685,0,4.71,4.522ZM27.5-1126v6.09Z" transform="translate(1670.758 1567.306)"/>
							    <line id="Line_14" data-name="Line 14" class="cls-22" y1="1.739" transform="translate(1698.292 460.916)"/>
							    <line id="Line_15" data-name="Line 15" class="cls-22" y1="1.689" transform="translate(1698.292 476.896)"/>
							    <path id="Path_31" data-name="Path 31" class="cls-22" d="M365.3,359.262h5.218a4.563,4.563,0,0,0,3.378-1.3,4.338,4.338,0,0,0-3.121-7.372,9.861,9.861,0,0,1-2.794-.138,2.782,2.782,0,0,1,.911-5.419c1.821-.025,3.039,0,5.469,0" transform="translate(1328.082 117.634)"/>
							  </g>
							</svg>
			  				<p>Oportunidades</p>
			  			</div>
			  			</a>
			  		</div>	
			  </div>
			  <br><br><br><br><br>
			  <div data-step="3" data-intro="Para tener una referencia de que significa cada color, podemos ver la leyenda que se muestra a continuación" class="right-align">
			    <div  class="stadistic">
			    	<p class="sta-1"><a style="padding-left:8px;padding-right: 8px;background-color:rgb(0, 126, 193); margin-right:5px;"></a> Necesidades basicas</p>
			    </div>

			    <div class="stadistic">
			    	<p><a style="padding-left:8px;padding-right: 8px;background-color:#ff9800; margin-right:5px;"></a> Fundamentos y bienestar</p>
			    </div>

			    <div class="stadistic">
			    	<p><a style="padding-left:8px;padding-right: 8px;background-color:#8bc34a; margin-right:5px;"></a>Oportunidades</p>

			    </div>
			    <div class="stadistic">
			    	<p><a style="padding-left:8px;padding-right: 8px;background-color:#bdbdbd; margin-right:5px;"></a> Municipios no Habilitados</p>

			    </div>
			    <div class="stadistic">
			    	<p><a style="padding-left:8px;padding-right: 8px;background-color:#00afbe; margin-right:5px;"></a> Rios y lagos</p>

			    </div>
			  </div>
         </div>
      </div>
      
         	
         	
 <div class="container">


    <section class="col s12" style="margin-top: 0em;">
		<article class="search-result row">
				<center><img id="loading" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif"></center>
				<div id="txtHint"><b></b></div>
		</article>
	</section>
	<script type="text/javascript">
			$("#loading").hide();
			var dbutton = document.getElementsByClassName("bouton");
			var i=0;
			for (i = 0; i < dbutton.length; i++){	
				  dbutton[i].onclick = function() { 
				  	
				  	$('html, body').animate({scrollTop:$(document).height()}, 'slow');
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			            xmlhttp2 = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			            xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        xmlhttp2.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("map-svg").innerHTML = this.responseText;
			            }
			        };
					var compo=this.textContent;
					var timews;
			        xmlhttp2.open("GET","maps-svg.php?id=<?php echo $id?>&q="+compo,true);
			    	xmlhttp2.send();
			        window.clearTimeout(timews);
					$("#loading").show();
					document.getElementById("txtHint").style.display = "none";
			        timews=setTimeout(function(){
				  	document.getElementById("txtHint").style.display = "block";
			        $("#loading").hide();

			        }, 2000); 
			        
			        timews=setTimeout(function(){
					xmlhttp.open("GET","programdata.php?id=<?php echo $id?>&q="+compo,true);
			    	xmlhttp.send();
			        }, 100); 
				}
			}
	</script>

</div>
         </div>
      </div>  
    </div>

    <script type="text/javascript" src="intro.js"></script>

    <script type="text/javascript">
	if(decodeURI(window.location.href.split("=").pop()) == "Acceso a Conocimientos Básicos" ||
	   decodeURI(window.location.href.split("=").pop()) == "Acceso a Información y Comunicaciones" || 
	   decodeURI(window.location.href.split("=").pop()) == "Nutricion y Asistencia Medica Basica" ||
	   decodeURI(window.location.href.split("=").pop()) == "Agua y Saneamiento" ||
	   decodeURI(window.location.href.split("=").pop()) == "Vivienda" ||
	   decodeURI(window.location.href.split("=").pop()) == "Seguridad personal" ||
	   decodeURI(window.location.href.split("=").pop()) == "Salud y Bienestar" ||
	   decodeURI(window.location.href.split("=").pop()) == "Sustentabilidad del Ecosistema" ||
	   decodeURI(window.location.href.split("=").pop()) == "Derechos Personales" ||
	   decodeURI(window.location.href.split("=").pop()) == "Libertad Personal y de Elección" ||
	   decodeURI(window.location.href.split("=").pop()) == "Educación Superior" ||
	   decodeURI(window.location.href.split("=").pop()) == "Tolerancia e Inclusión"){
		var filter = window.location.href.split("=").pop();
		console.log(filter);
		$('html, body').animate({scrollTop:$(document).height()}, 'slow');
			        if (window.XMLHttpRequest) {
			            // code for IE7+, Firefox, Chrome, Opera, Safari
			            xmlhttp = new XMLHttpRequest();
			            xmlhttp2 = new XMLHttpRequest();
			        } else {
			            // code for IE6, IE5
			            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			            xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
			        }
			        xmlhttp.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("txtHint").innerHTML = this.responseText;
			            }
			        };
			        xmlhttp2.onreadystatechange = function() {
			            if (this.readyState == 4 && this.status == 200) {
			                document.getElementById("map-svg").innerHTML = this.responseText;
			            }
			        };
					var compo=this.textContent;
					var timews;
			        xmlhttp2.open("GET","maps-svg.php?id=<?php echo $id?>&q="+filter,true);
			    	xmlhttp2.send();
			        window.clearTimeout(timews);
					$("#loading").show();
					document.getElementById("txtHint").style.display = "none";
			        timews=setTimeout(function(){
				  	document.getElementById("txtHint").style.display = "block";
			        $("#loading").hide();

			        }, 2000); 
			        
			        timews=setTimeout(function(){
					xmlhttp.open("GET","programdata.php?id=<?php echo $id?>&q="+filter,true);
			    	xmlhttp.send();
			        }, 100); 
	}
    	$("#pruebadeboton").click(function(){
    		$("#pruebadecarga").hide();
    	});
    	
		$(function() {
		      $( ".1" ).on( 'click', function() {
		      	$( this ).toggleClass( "active-blue" );
		        $( ".2").removeClass( 'active-orange' );
		        $( ".3" ).removeClass( 'active-green' );
		      });
		      $( ".2" ).on( 'click', function() {
		      	$( this ).toggleClass( "active-orange" );
		        $( ".1").removeClass( 'active-blue' );
		        $( ".3" ).removeClass( 'active-green' );
		      });
		      $( ".3" ).on( 'click', function() {
		      	$( this ).toggleClass( "active-green" );
		        $( ".2").removeClass( 'active-orange' );
		        $( ".1" ).removeClass( 'active-blue' );
		      });
		      $( "li").on( 'click', function() {
		        $( ".3").removeClass( 'active-green' );
		        $( ".2").removeClass( 'active-orange' );
		        $( ".1" ).removeClass( 'active-blue' );
		      });
		});
    </script>

  </center>
</section>
<?php include("footer.php");?>
</html>