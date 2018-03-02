<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<?php include ('header.php');
include ('../cms/classes/DB.class.php'); 
 $id=$_GET['n'];
 if(!isset($id)){
 	header("location:index.php");
 }
	 if (file_exists('../cms/config.php')) {
		require_once '../cms/config.php'; 
		require_once '../cms/version.php'; 
	}else{
		header("Location: installation");
		exit();
	}
 	$db = new DB(); 
?>

<style type="text/css">
	.fsection{
		background-color: #00afbe; 
		color: white;  
		margin-left: 25px!important;
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
		font-size: 24px; 
		font-weight: bold; 
		text-align: left;
	}
	.fsection p{
		text-align: left; 
		font-size: 11px;
	}
	.ssection{
		margin:80px !important; 
		margin-top: 47px !important;
	}
	.ssection img{
		position: relative; 
		left:-5%; 
		top: 13%;
	}
	

</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body">
      <div class="row"> 


         <div class="col s3 fsection">
         	<img src="http://fundacionpoma.org/mapaips/assets/img/maps/mpsa.svg">
         	<h4>Midiendo el</h4>
         	<h1>Progreso Social</h1>
         	<p>El modelo del Progreso Social se fundamenta en una visión holística y rigurosa de las condiciones sociales y ambientales de las sociedades. Tanto el modelo como la metodología del Índice de Progreso Social son el resultado de un proceso colaborativo de investigación en el que se ha recurrido a una amplia gama de académicos y expertos en políticas.
         	<br>
         	<br>
         	El modelo sintetiza el amplio conjunto de investigaciones en numerosos campos, a fin de identificar las múltiples dimensiones del desempeño social y ambiental de las sociedades.</p>
         </div> 
         <div class="col s3 ssection">
         	<?php
         		$prueba=$db->selectSpecific("nombre_dep", "departamento", "nombre_dep like '$id'");
				foreach ($prueba as $key) {
					echo '<h5 class="depman" style="color: #f49715; font-weight: bold; position: relative; left:-35%;"><i class="fas fa-arrow-circle-left"></i>'.$key["nombre_dep"].'</h5>';
				}
         	?>
         	<img class="responsive" style="" src="http://fundacionpoma.org/mapaips/assets/img/maps/mapa_santaana_fbaic.svg">
         </div> 

         <div class="col s3">
         	<style type="text/css">
         		.ulcontent {
         			margin: 0px;
         		}
         		.ulcontent li a{
         			width: 129px;
         			text-align: center;
         			margin-top:30px;
         			color: #085eaa!important
         		}
         		.active-blue{
         			background-color: #1e88e5!important;
         			height: 1px!important;
         		}
         		.active-orange{
         			background-color: #ff9800!important;
         			height: 100px!important;
         			color: white;
         		}
         		.active-green{
         			background-color: #8bc34a!important;
         			height: 100px!important;
         		}
         		.ulcontent li a:hover{
         			background-color: transparent;
         		}
         		.comnav{
         			height: 100px; 
         			margin-top: 100px; 
         			background-color: #1e88e5; 
         			width:387px; 
         			position: absolute; 
         			left:67%;
         		}
         		.dropdown-content li a{
         			height: 40px;
         			margin-top: 0px;
         			font-size: 9px;
         			text-align: left;
         			font-weight: bold;
         			line-height: 15px;
         		}
         		.responsive{
						width: 400px;
					}
         		@media only screen and (min-width: 1466px) {
	         		.ulcontent li a{
	         			width: 145px;
	         			text-align: center;
	         			height:106px;
	         			margin-top:30px;
	         		}
	         		.active-blue{
	         			background-color: #1e88e5!important;
	         			height: 100px!important;
	         		}
	         		.active-orange{
	         			background-color: #ff9800!important;
	         			height: 100px!important;
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
					.responsive{
						width: 500px;
					}
				}
				@media only screen and (max-width: 1066px) {
	         		.ulcontent li a{
	         			width: 115px;
	         			text-align: center;
	         			height:106px;
	         			margin-top:30px;
	         		}
	         		.active-blue{
	         			background-color: #1e88e5!important;
	         			height: 100px!important;
	         		}
	         		.active-orange{
	         			background-color: #ff9800!important;
	         			height: 100px!important;
	         		}
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
	         			line-height: 15px;
	         		}
	         		.responsive{
						width: 300px;
						margin-left: -70px
					}
         		}
					
         	</style>
         	<ul id="dropdown1" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;">
			  <li><a class="bouton">Nutricion y Asistencia Medica basica</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Agua y Saneamiento</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Vivienda</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Seguridad personal</a></li>
			</ul>
			<ul id="dropdown2" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;">
			  <li><a class="bouton" style="margin-bottom: 20px">Acceso a Conocimientos Básicos</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Acceso a Información y Comunicaciones</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Salud y Bienestar</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Sustentabilidad del Ecosistema</a></li>
			</ul>
			<ul id="dropdown3" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;">
			  <li><a class="bouton">Derechos Personales</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Libertad Personal y de Elección</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Tolerancia e Inclusión</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Educación Superior</a></li>
			</ul>
         	<nav class ="comnav" style="">
			    <div class="nav-wrapper" >
			      <ul class="ulcontent" style="line-height: 20px; text-align: center; color: ">
			        <li class="1" style=""><a style="" class="dropdown-button" href="#!" data-activates="dropdown1">Necesidades Basicas</a></li>
			        <li class="2"><a style="" class="dropdown-button" href="#!" data-activates="dropdown2">Fundamentos de Bienestar</a></li>
			        <li class="3"><a style="" class="dropdown-button" href="#!" data-activates="dropdown3"><p
			        	style="position: relative; left:-4px; top: 6px">Oportunidades</p></a></li>
			      </ul>
			    </div>
			  </nav>
         </div>

      </div>
      
         	
         	
 <div class="container">
   <!-- <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
	</hgroup>-->

    <section class="col s12 ">
		<article class="search-result row">
				<div id="txtHint"><b>Info will be listed here.</b></div>
		</article>
	</section>
<script type="text/javascript">
		var dbutton = document.getElementsByClassName("bouton");
		var i=0;
		for (i = 0; i < dbutton.length; i++){	
			  dbutton[i].onclick = function() { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        };
	        
		    var compo=this.textContent;
		    xmlhttp.open("GET","getuser.php?id=<?php echo $id?>&q="+compo,true);
    		xmlhttp.send();
			 }
		}
</script>

</div>
         </div>
      </div>  
    </div>
    <script type="text/javascript">
    	$("#pruebadeboton").click(function(){
    		$("#pruebadecarga").hide();
    	});
    	$( ".1" ).click(function() {
		  $( this ).toggleClass( "active-blue" );
		});
		$( ".2" ).click(function() {
		  $( this ).toggleClass( "active-orange" );
		});
		$( ".3" ).click(function() {
		  $( this ).toggleClass( "active-green" );
		});
		$( document ).ready(function() {
		    $(".dropdown-button").dropdown();
		});
    </script>

  </center>
</section>
<?php include("footer.php");?>
</html>