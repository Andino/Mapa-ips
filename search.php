<?php $serv = $_POST['taskOption'];$sear = $_POST['sbar'];if(empty($sear)||empty($serv)){header("location:index.php");}?>
<!DOCTYPE html>
<html>
<?php
include ('header.php');

 
include ('cms/classes/DB.class.php');
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
	#toast-container {
	  top: 30%; !important;
	  right: auto !important;
	  left:35%;  
	}

</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body">
      <div class="row"> 

      
         	
         	
 <div class="container">
   <!-- <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
	</hgroup>-->

    <section class="col s12 ">
		<article class="search-result row">

				<?php 

            
            //$compo=mysqli_real_escape_string($db->connect(), $comp);
            //$dep=mysqli_real_escape_string($db->connect(), $p);
            $prueba=$db->preSelectSpecific("f.nombre_fundaorg, p.nombre_prog, p.imagen"," 
                programa_ips as p 
			    inner join proxcomp as pc on pc.id_prog = p.id_prog
			    inner join componentes as c on c.id_comp = pc.id_comp
			    inner join proxmuni as pm on pm.id_prog = p.id_prog 
			    inner join municipio as m on m.id_muni = pm.id_muni
			    inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto
			    inner join fundaorg_ips as f on f.id_fundaorg = ci.id_fundaorg
			    inner join servicios_ips as s on s.id_servicio = c.id_servicio 
			    inner join departamento as d on d.id_dep = m.id_dep ",
                " (f.nombre_fundaorg like '%$sear%' or d.nombre_dep like '%$sear%' or m.nombre_muni like '%$sear%') and s.nombre_servicio like'$serv'");
            if(!empty($prueba)){
            	echo "<center><h1 style='font-weight:bold; font-size:40px; color:gray;'>RESULTADOS</h1></center>
            	<hr>
            	";
	            foreach ($prueba as $key) {
	           	$nombre_prog=$key["nombre_prog"];
	            echo '
	            <div class="row">
	            <div class="col s4">
	                <a href="#" title="Lorem ipsum" class="thumbnail">';	
	                if(empty($key["imagen"])){
	                  echo '<img width="200" src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" />';
	                }
	                else{
	                  echo'<img src="cms/img/programa/'.$key["imagen"].'" class="center" alt="Lorem ipsum" />';
	                }
	            echo '
	                </a>
	            </div>
	            <div class="col s8" style="text-align: left; color:gray; font-weight:bold;">
	                <h3 style="font-size: 17px; text-align: left;">
	                    <a href="#" style=" color:gray!important; font-weight:bold;">'.$key["nombre_prog"].' </a>
	                    <small class="right" style="color:#38aab3; margin-top:-7px;"><i class="fas fa-plus-circle"></i><a href="programas.php?pro='.$key["nombre_prog"].'">&nbsp;Ver más</a></small>
	                </h3>
	                <p style="font-size:15px;">'.$key["nombre_fundaorg"].
	                //.' - '.$key["nombre_prog"].'
	                '</p>';
	                $comp=$db->preSelectSpecific("c.nombre_comp"," 
	                programa_ips as p 
				    inner join proxcomp as pc on pc.id_prog = p.id_prog
				    inner join componentes as c on c.id_comp = pc.id_comp
				    inner join proxmuni as pm on pm.id_prog = p.id_prog 
				    inner join municipio as m on m.id_muni = pm.id_muni
				    inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto
				    inner join fundaorg_ips as f on f.id_fundaorg = ci.id_fundaorg
				    inner join servicios_ips as s on s.id_servicio = c.id_servicio 
				    inner join departamento as d on d.id_dep = m.id_dep ",
	                " (f.nombre_fundaorg like '%$sear%' or d.nombre_dep like '%$sear%' or m.nombre_muni like '%$sear%') and s.nombre_servicio like'$serv'");
	                echo '<p style="font-size:12px;">COMPONENTE IPS: ';
	                foreach ($comp as $key) {
	                	echo $key["nombre_comp"].", ";
	            	}
	            	echo '</p>';
	            	echo '<p style="font-size:12px;">AREA GEOGRAFICA DE ALCANCE:';
	               
	                $geo=$db->preSelectSpecific("d.nombre_dep","programa_ips as p 
                                     inner join proxcomp as pc on pc.id_prog = p.id_prog 
                                     inner join proxmuni as pm on pm.id_prog = p.id_prog 
                                     inner join municipio as m on m.id_muni = pm.id_muni
                                     inner join componentes as c on c.id_comp = pc.id_comp  
                                     inner join departamento as d on d.id_dep = m.id_dep 
                                     ", "p.nombre_prog like'$nombre_prog'");
	                foreach ($geo as $val){
	                    echo $val["nombre_dep"].", ";
	                }
	                echo '</p>
	                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
	            </div>
	            </div>
	            <hr>';
	            }
	        }
	        else{
	        	echo('<center style="margin:40px;"><h1 style="font-weight:bold; font-size:40px; color:gray;">RESULTADOS</h1></center>
            	<hr>

            	<h1 style="font-weight:bold; font-size:40px; color:gray;">No Encontrados</h1>
	        		');
	        }
?>
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
		    xmlhttp.open("GET","getuser.php?id=<?php echo '$id' ?> &q="+compo,true);
    		xmlhttp.send();
			 }
		}
</script>

</div>
         </div>
      </div>  
    </div>
    <script type="text/javascript">
    	$(document).ready(function(){
			$('.tooltipped').tooltip({delay: 50});
		});
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