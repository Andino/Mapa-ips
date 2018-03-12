<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		font-size: 24px; 
		font-weight: bold; 
		text-align: left;
	}
	.fsection p{
		text-align: left; 
		font-size: 13px;
		font-weight: 300;
	}

	.fsection-info{
		padding: 40px!important;
		position: relative!important;
		width: 25%!important;

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
 margin-left: 15em!important;
 height: 100vh!important;
 width: 60vh;
	
}
.container-maps{
	
}
.row{
	position: sticky;
}

.right-align{
	position: static;!important;
	width: 100%;
	margin-left: 25em;
	margin-top: -3em;
	z-index: 10000;
	display: grid;
	grid-template-columns: repeat(3,190px);
	padding: 5px;
}

.stadistic{
	
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.stadistic p{
	color: #9e9e9e;
	font-size: 14px;

}



</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body container-maps">
	
      <div class="row"> 


         <div class="col s4 fsection fsection-info" >
         	<img src="http://fundacionpoma.org/mapaips/assets/img/maps/mpsa.svg">
         	<h4>Midiendo el</h4>
         	<h1>Progreso Social</h1>
         	<p>El modelo del Progreso Social se fundamenta en una visión holística y rigurosa de las condiciones sociales y ambientales de las sociedades. Tanto el modelo como la metodología del Índice de Progreso Social son el resultado de un proceso colaborativo de investigación en el que se ha recurrido a una amplia gama de académicos y expertos en políticas.
         	<br>
         	<br>
         	El modelo sintetiza el amplio conjunto de investigaciones en numerosos campos, a fin de identificar las múltiples dimensiones del desempeño social y ambiental de las sociedades.</p>
         </div> 
         <div class="col s3 ssection map-depart" style="">
         	<?php
         		$prueba=$db->selectSpecific("nombre_dep", "departamento", "nombre_dep like '$id'");
				foreach ($prueba as $key) {
					echo '	<div class="text-apartament">
    					<a href="index.php"><img src="img/left-arrow.png" alt="left"></a><span class="name-apartament">'.$key["nombre_dep"].'</span></div>';
				}
         	?>


<center>
<div id="map-svg" style=" width: 100%;">
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 950 1200" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="600">
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
</div>
</center>   
			  <div class="right-align">
			    <div class="stadistic">
			    	<p><a style="padding-left:8px;padding-right: 8px;background-color:rgb(0, 126, 193); margin-right:5px;"></a> Necesidades basicas</p>
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
	


         <div class="col s3 menu-category" style="display: flex; justify-content: center; align-items: center;">
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
         		.dropdown-content{
         			margin-top: 140px!important;
         		}
         		.dropdown-content li a{
         			color: #9e9e9e;
         			font-family: 'Roboto', sans-serif;
         			font-size: 12px!important;
         			font-weight: 500;
         			height: 40px;
         			margin-top: 0px;
         			text-align: left;
         			line-height: 15px;
         			letter-spacing: 0.2px;
         			
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
						 padding: 15px;
						 cursor: pointer; 
					}

					.sub-hijo:hover{
						filter: brightness(130%);
						transition-duration: 1s;
					}
					.sub-hijo p{
						color: #05579f;
						font-family: 'Roboto', sans-serif;
						font-size: 15px; 
					}
					.sub-hijo img{
						width: 50%;
					}
				@media screen and( max-width: 1920px){




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
	         			line-height: 15px;
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

         	<ul id="dropdown1" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;border:1px solid #039be5;">
			  <li><a class="bouton">Nutricion y Asistencia Medica Basica</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Agua y Saneamiento</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Vivienda</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Seguridad personal</a></li>
			</ul>
			<ul id="dropdown2" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important;border:1px solid #ff9800;">
			  <li><a class="bouton" style="margin-bottom: 20px">Acceso a Conocimientos Básicos</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Acceso a Información y Comunicaciones</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Salud y Bienestar</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Sustentabilidad del Ecosistema</a></li>
			</ul>
			<ul id="dropdown3" class="dropdown-content" style="margin-top: 80px; background: white!important; width: 19px!important; padding: 0!important; border:1px solid #8bc34a;">
			  <li><a class="bouton">Derechos Personales</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Libertad Personal y de Elección</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Tolerancia e Inclusión</a></li>
			  <li class="divider"></li>
			  <li><a class="bouton">Educación Superior</a></li>
			</ul>


			  <div class="padre nav-option">
			  		<div class="hijo">
			  			<a class="dropdown-button" data-activates="dropdown1">
			  			<div class="sub-hijo 1 border">
			  				<img src="img/iconos/basicas.svg" alt="hola">
			  				<p>Necesidades Basicas</p>
			  			</div>
						</a>

						<a class="dropdown-button" data-activates="dropdown2">
			  			<div class="sub-hijo 2" style="">
			  				<img src="img/iconos/fundamentos.svg" alt="hola" >
			  				<p>Fundamentos de Bienestar</p>
			  			</div>
						</a>

						<a class="dropdown-button" data-activates="dropdown3">
			  			<div class="sub-hijo 3 border1">
			  				<img src="img/iconos/oportunidades.svg" alt="hola">
			  				<p>Oportunidades</p>
			  			</div>
			  			</a>
			  		</div>	
			  </div>
         </div>
      </div>
      
         	
         	
 <div class="container">
   <!-- <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
	</hgroup>-->

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
		        $("#loading").show();
		        $("#txtHint").hide();
				var compo=this.textContent;
		        xmlhttp2.open("GET","maps-svg.php?id=<?php echo $id?>&q="+compo,true);
		    	xmlhttp2.send();
		        setTimeout(function(){
				    xmlhttp.open("GET","programdata.php?id=<?php echo $id?>&q="+compo,true);
		    		xmlhttp.send();
		        	$("#loading").hide();
		        	$("#txtHint").show();
		        }, 3700); 
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