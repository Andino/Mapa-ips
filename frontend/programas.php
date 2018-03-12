<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<?php include ('header.php');
include ('../cms/classes/DB.class.php'); 
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
	.content-a{
		font-size:12px;
		font-weight: bold!important; 
		line-height: 17px;
		width:66%!important;
		color: black;
	}
	.content-b{
		font-size:12px;
	}
	.content-c{
		font-size:12px;
		font-weight: bold!important; 
		line-height: 17px;
		width:100%!important;
		color: black;
	}
	.thumbnail p{
		font-weight: lighter;
		font-size: 15px;

	}
	.gallery-container{
		display:grid;
		grid-template-columns: repeat(auto-fit, minmax(80px, auto));
  		grid-template-rows: repeat(5, 50px); 
  		grid-column-gap: 10px;
  		grid-row-gap: 15px;
	}
	.item img{
  	   height: 100%;
  	   object-fit: cover;
  	   width: 100%;
	}

</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body">
    	<br>
      <div class="row"> 
      	<?php 
      		$db = new DB(); 
    		$comp = $_GET['pro'];
            
            $compo=mysqli_real_escape_string($db->connect(), $comp);
            $prueba=$db->preSelectSpecific("nombre_fundaorg, instpubli_prog, instpriv_prog, cantBenef, telefono, nombre_prog, mail_contactoorg, imagen, urlwebsite_contactoorg, nombre_contactoorg, actPrinc_prog, proposito_prog, indMetricas, actEsp_prog","programa_ips as p 
		    inner join proxcomp as pc on pc.id_prog = p.id_prog
		    inner join componentes as c on c.id_comp = pc.id_comp
		    inner join proxmuni as pm on pm.id_prog = p.id_prog 
		    inner join municipio as m on m.id_muni = pm.id_muni
		    inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto
		    inner join fundaorg_ips as f on f.id_fundaorg = ci.id_fundaorg
		    inner join servicios_ips as s on s.id_servicio = c.id_servicio 
		    inner join departamento as d on d.id_dep = m.id_dep ", 
                "p.nombre_prog like '$comp'");
            foreach ($prueba as $key) {
            echo '
            <div class="row container">
            <div class="col s4" style="text-align:left">
                <a href="#" title="Lorem ipsum" class="thumbnail">
                '; 
                if(empty($key["imagen"])){
	                  echo '<img width="250" src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" />';
	                }
	                else{
	                  echo'<img src="../cms/img/programa/'.$key["imagen"].'" class="center" alt="Lorem ipsum" />';
	                }
                echo'
                <p style="text-align:center; font-weight:bold; width:90%; margin-left:2px">'.$key["nombre_fundaorg"].'</p>
                <p><i style="color:#00afbe!important" class="fas fa-phone"></i> '.$key["telefono"].'</p>
                <p><i style="color:#00afbe!important" class="fas fa-envelope"></i> '.$key["mail_contactoorg"].'</p>
                <p><i style="color:#00afbe!important" class="fas fa-globe"></i> '.$key["urlwebsite_contactoorg"].'</p>
                <p style="font-weight:bold">Persona de contacto</p>
                <p><i style="color:#00afbe!important" class="fas fa-user"></i> '.$key["nombre_contactoorg"].'</p>
                <div class="gallery-container">
                	<div class="item"><img  src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" /></div>
                	<div class="item"><img  src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" /></div>
                	<div class="item"><img  src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" /></div>
                	<div class="item"><img  src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" /></div>
                	<div class="item"><img  src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" /></div>
                </div>
            </div>
            <div class="col s8" style="text-align: left; color:gray; font-weight:bold;">
                <h3 style="font-size: 17px; text-align: left;">
                    <a class="right" href="'.$_SERVER['HTTP_REFERER'].'" style="color:#f49715; margin-top:-7px; font-weight:bold"><i class="fas fa-arrow-circle-left"></i></i> Regresar</a>
                </h3>

                <br>
                <center><a href="#" style="font-weight:bold!important;">'.$key["nombre_prog"].' </a></center>
                	<div class ="row">	
	                	<div class="col s5">
			            	<h4 class="content-a">CLASIFICACIÓN DE LA ORGANIZACIÓN:</h4> 
			            </div>
						<div class="col s6">		            	
			            	<h4 class="content-b" style="right">'.$key["nombre_fundaorg"].'</h4>
			            </div>
                	</div>
                	<div class ="row">	
	                	<div class="col s5">
			            	<h4 class="content-a">ACTIVIDAD PRINCIPAL DE LA ORGANIZACIÓN:</h4> 
			            </div>
						<div class="col s6">		            	
			            	<h4 class="content-b" style="right">'.$key["actPrinc_prog"].'</h4>
			            </div>
                	</div>
                	<div class ="row">	
	                	<div class="col s5">
			            	<h4 class="content-a">PROPOSITO DEL PROYECTO:</h4> 
			            </div>
						<div class="col s6">		            	
			            	<h4 class="content-b" style="right">'.$key["proposito_prog"].'</h4>
			            </div>
                	</div>
                	<div class ="row">	
	                	<div class="col s5">
			            	<h4 class="content-a">INDICADORES PARA MEDICIÓN DE IMPACTO:</h4> 
			            </div>
						<div class="col s6">		            	
			            	<h4 class="content-b" style="right">'.$key["indMetricas"].'</h4>
			            </div>
                	</div>
                	<div class ="row">	
	                	<div class="col s5">
			            	<h4 class="content-a">ACTIVIDADES ESPECÍFICAS:</h4> 
			            </div>
						<div class="col s6">		            	
			            	<h4 class="content-b" style="right">'.$key["actEsp_prog"].'</h4>
			            </div>
                	</div>
                	<div class ="row">	
	                	<div class="col s6">
			            	<h4 class="content-c">OBJETIVOS DE DESARROLLO SOSTENIBLE A LOS QUE CONTRIBUYE:</h4> 
			            	<h4 class="content-b" style="right">';
			            	$p=$comp;
				            $prueba2=$db->select("programa_ips as p 
				            	inner join proxobj as po on po.id_prog = p.id_prog 
				            	inner join objetivosdesarrollo_ips as o on o.id_objetivos = po.id_objetivos ", 
				                "p.nombre_prog like '".$key["nombre_prog"]."'");

				            foreach ($prueba2 as $key2) {
			            		echo($key2["descripcion_objetivo"]."<br>");
			            	}
			            echo'</h4>

			            </div>
						<div class="col s4">		            	
							<h4 class="content-a">COMPONENTE IPS:</h4> 
			            	<h4 class="content-b" style="right">';
			            	$p=$comp;
			            	$dep=mysqli_real_escape_string($db->connect(), $p);
			            	$dep2=utf8_encode($dep);
			            	$prueba2=$db->select("programa_ips as p 
				            	inner join proxcomp as pc on pc.id_prog = p.id_prog 
				            	inner join componentes as c on c.id_comp = pc.id_comp ", 
				                "p.nombre_prog like '".$key["nombre_prog"]."'");
				            foreach ($prueba2 as $key2) {
			            		echo($key2["nombre_comp"]." <br>");
			            }
			            echo'</h4>
			            </div>
                	</div>
                	<div class="row">
                		<center><div style="height:2px; background-color:gray; width:35%;"></div></center>
	                	<div class="col s12">
	                		<h4 class="content-c">INSTITUCIONES QUE COLABORAN</h4>
	                	</div>
	                	<div class="col s6">		            	
                		<h4 class="content-c">PUBLICAS</h4> 
			            	<h4 class="content-b" style="right">';
			            	$inst2 = explode(',' , $key["instpubli_prog"]);
			            	foreach($inst2 as $value =>$key2) {
			            		echo $key2."<br>";
			            	}

			            	echo'</h4>
			            </div>
						<div class="col s4">		            	
							<h4 class="content-a">PRIVADA	:</h4> 
			            	<h4 class="content-b" style="right">';
			            	$inst = explode(',' , $key["instpriv_prog"]);
			            	foreach($inst as $value =>$key3) {
			            		echo $key3."<br>";
			            	}

			            	echo'</h4>
			            </div>
                	</div>

                	<div class="row">
	                	<div class="col s6">		            	
                		<h4 class="content-c">BENEFICIARIOS DIRECTOS</h4> 
			            	<h4 class="content-b" style="right">'.$key["cantBenef"].' Personas</h4>
			            </div>
						<div class="col s6">	

							<h4 class="content-a">AREA GEOGRAFICA:</h4> 
			            	<h4 class="content-b" style="right">';
			            	$nombre_prog=mysqli_real_escape_string($db->connect(), $key["nombre_prog"]);
                			$geo=$db->select("programa_ips as p 
                                 inner join proxcomp as pc on pc.id_prog = p.id_prog 
                                 inner join proxmuni as pm on pm.id_prog = p.id_prog 
                                 inner join municipio as m on m.id_muni = pm.id_muni
                                 inner join componentes as c on c.id_comp = pc.id_comp  
                                 inner join departamento as d on d.id_dep = m.id_dep 
                                 ", "p.nombre_prog like'$nombre_prog'");
			                foreach ($geo as $val){
			                    echo $val["nombre_dep"]." <br>";
			                }

			            	echo'</h4>
			            </div>
                	</div>

                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
            </div>
            </div>
            <hr>';
            }
      	?>
      </div>
      
         	
         	
 <div class="container">
   <!-- <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
	</hgroup>-->


</div>
         </div>
      </div>  
    </div>

  </center>
</section>
<?php include("footer.php");?>
</html>