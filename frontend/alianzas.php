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
		margin:80px !important; 
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
	margin-left: 23px;
}
.comnav{
	border-radius: 5px;
	margin-left: 10px;
}

.map-depart{
	
	
}
.container-maps{
	
}
.row{
	position: sticky;
}
</style>
<section class="svg-map">
  <center>
  <div class="card text-center svg-map-card " style="z-index: 999; width: 95%;">
    <div class="card-body container-maps">
      <div class="row"> 


         <div class="col s3 fsection fsection-info">
         	<img src="http://fundacionpoma.org/mapaips/assets/img/maps/mpsa.svg">
         	<h4>Midiendo el</h4>
         	<h1>Progreso Social</h1>
         	<p>El modelo del Progreso Social se fundamenta en una visión holística y rigurosa de las condiciones sociales y ambientales de las sociedades. Tanto el modelo como la metodología del Índice de Progreso Social son el resultado de un proceso colaborativo de investigación en el que se ha recurrido a una amplia gama de académicos y expertos en políticas.
         	<br>
         	<br>
         	El modelo sintetiza el amplio conjunto de investigaciones en numerosos campos, a fin de identificar las múltiples dimensiones del desempeño social y ambiental de las sociedades.</p>
         </div> 
         <div class="col s3 ssection map-depart">
         	<?php
         		$prueba=$db->selectSpecific("nombre_dep", "departamento", "nombre_dep like '$id'");
				foreach ($prueba as $key) {
					echo '	<div class="text-apartament">
    					<img src="img/left-arrow.png" alt="left"><span class="name-apartament">'.$key["nombre_dep"].'</span></div>';
				}
         	?>


<center>
<div id="map-svg">
	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 900 1200" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="600">
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
	<polygon class="st0" points="283,735 272.6,761.9 272.6,801.4 261.5,811.3 261.5,827.3 247.9,844.6 244.2,856.9 245.7,866.8 
	226.9,866.8 199.8,884.1 194.8,898.9 180,907.5 180,935.9 166.5,935.9 156.6,958.1 150.7,996.1 142.3,992.2 131,990.8 122.3,989 
	111.9,986.6 90.1,985.7 88.7,982.5 84.2,981.1 81.9,983 73.3,982 68.3,976.5 52,970.3 84,945.4 110.4,911.4 144,879.5 148.9,870.5 
	154.3,835.9 159.1,821.5 173.3,805 181.9,791.1 198.8,780.6 210.9,766.1 212.5,753.5 211.5,743.4 239.3,743.4 262.7,731.1 
	272.6,726.1 275,722.6 "/>
<polygon class="st0" points="246.7,970.4 244.2,980.3 259,991.4 259,1004.5 244.8,1002.9 239.4,1004.8 238,1007.5 221.7,1011.3 
	204.4,1012.2 192.2,1007.1 177.2,998.7 170,998.7 155.4,998.3 150.7,996.1 156.6,958.1 166.5,935.9 180,935.9 180,907.5 
	194.8,898.9 199.8,884.1 226.9,866.8 245.7,866.8 246.7,873 255.3,873 255.3,886.5 259,891.5 259,938.3 251.6,954.4 "/>
<polygon class="st0" points="351.5,948.2 351.5,1010.3 345,1012.6 332.3,1010.3 324.6,1008.9 300.1,1002.5 291.1,1005.7 
	282.9,1007.1 259,1004.5 259,991.4 244.2,980.3 246.7,970.4 251.6,954.4 259,938.3 259,891.5 255.3,886.5 255.3,873 246.7,873 
	245.7,866.8 244.2,856.9 247.9,844.6 261.5,827.3 261.5,811.3 272.6,801.4 272.6,761.9 283,735 286.1,739.7 297.2,741 308.3,741 
	314.3,742.4 331.8,761.9 331.8,839.6 339.2,856.9 339.2,879.1 333,887.8 333,901.3 339.2,908.7 341.7,930.9 "/>
<polygon class="st0" points="461.3,950.7 461.3,982.8 452.7,988.9 452.7,1016.1 442.1,1016.3 432.1,1012.2 425.3,1015.4 419,1010.3 
	414,1013.6 407.6,1014 399.9,1012.2 390.8,1012.2 384.5,1010.3 373.2,1015.9 352.8,1009.8 351.5,1010.3 351.5,948.2 341.7,930.9 
	339.2,908.7 333,901.3 333,887.8 339.2,879.1 339.2,856.9 331.8,839.6 331.8,761.9 314.3,742.4 328.1,745.9 363.9,745.9 
	363.9,743.4 388.5,753.3 391.3,757.8 392.2,759.5 403.3,787.8 423.1,817.4 419.4,826.1 421.8,844.6 419.4,849.5 419.4,877.9 
	426.8,887.8 444.1,923.5 445.3,926 445.7,926 "/>
<polygon class="st0" points="444.1,923.5 445.7,926 445.3,926 "/>
<path class="st0" d="M628.1,640.3l-0.1,6.5l3,4.8l-6,4.9l0.3,1.8l0.4,2.3l1.5,0.4l3.2,4.6l13.6,18.5l-2.5,23.4l-9.9,12.3l-7.4,6.2
	l-0.7,3.5l-3,13.8l-4.9,9.9v16l2.5,8.6l-1.2,8.4h0v0l-1.3,8.9l-7.2,1.6v0l-8.9,2h-8.6v9.9l-2.5,6.2l-13.6,11.1v12.3l-12.3,16v14.8
	l-3.7,7.4v29.6l2.5,8.6l-2.5,11.1l-3.7,8.6l3.3,3.3l-52.8-2.6l3.9-1.9c0,0-2.5-12.3-2.5-13.6c0-1.2-1.2-7.4-1.2-7.4l1.2-11.1
	l6.2-29.6l-2.5-21l6.2-19.7l7.4-18.5v-16l-11.1-4.9l1.2-30.8l-11.1-21l1.2-13.6l16-24.7l-16,1.2l-8.6,7.4l-8-2.2l-5.6-1.5l-6.2-16
	H465l-13.6-3.7l-37-21.6l32.1-8l17.3,2.5l12.3,3.7l4.9-1.2l8.6,12.3l13.6,9.9l17.3-12.3l13.6,2.5h12.3l73.4-71l-1.2,2.9l-6.1,6.8
	l2.3,4l4.5,1.9l21.5-9.1l6.1,1.3l-2.2,11.8L628.1,640.3z"/>
<polygon class="st0" points="622.3,597.8 619.9,603.4 546.4,674.3 534.1,674.3 520.5,671.9 503.3,684.2 489.7,674.3 481.1,662 
	476.1,663.2 463.8,659.5 446.5,657.1 414.4,665.1 412,665.7 414.4,654.6 416.9,644.7 405.8,631.1 388.5,625 382.2,620.6 
	382.2,620.6 372.5,613.9 375,610.2 397.2,606.5 394.7,604 377.4,600.3 366.3,589.2 371.3,580.6 375,565.8 378.7,558.4 403.3,542.3 
	418.1,534.9 429.4,525.9 434.2,554.7 445.3,559.6 456.4,565.8 460.1,570.7 465,574.4 493.4,576.9 508.2,580.6 534.1,580.6 
	553.9,570.7 566.2,580.6 578.5,585.5 594.1,591.6 594.6,594.1 "/>
<path class="st0" d="M638.3,220.6l-35.7,2.8v3.7l-8.6,8.6l-8.6,9.9h-13.6l-11.1-12.3l-2.5-12.3H553l0,0.1l-3.4-0.1
	c0,0-14.8-11.1-18.5-11.1c-3.7,0-7.4,8.6-7.4,8.6l-37-28.4l-2.5,9.9v3.7l-2.5,7.4h-23.4l-21,9.9l-7.4-9.9l-6.2,0.2l-2.5-7.7l8-18.6
	l7.8-0.5l2.4-7.1l6-4.3l-0.8-13.2l-8.5-5.8l-1.1-3.2l8.2-15.9l0.4-6.5l-2.1-2.6l12.4-4.9l10.2,5.7l2.6-1.2l1.7-11.4l7.9-8.2
	l1.7-12.7l4.5-6.1l5.9-1.4l9.4,4.9l8.9,0l16.6-7.4l19.4-18.8l17-2.6l6.2-0.2l5.9,4.5l3.5,24.9l2.5,3.4l5.9,0.4l9.8-4.4l6.2,1
	l5.3-5.6l4.2-0.8l6.4,3.3l4.7,12.8l4.7,3.5l0.6,5.5l-6.7,5.6l-1.7,6.6l-8.9,4.3l0.2,12.4l-5.3,18.4l-1.3,1.7l-4-1.3l-3.3,3.9
	l1.5,10.1l-2.7,7.7l14.2,23.9l3.2,1.1l6.4-3.1l9.9,10l2.7,1.3l4.6-2.7L638.3,220.6z"/>
<path class="st0" d="M594.1,591.6l-15.6-6.1l-12.3-4.9l-12.3-9.9l-19.7,9.9h-25.9l-14.8-3.7l-28.4-2.5l-4.9-3.7l-3.7-4.9l-11.1-6.2
	l-11.1-4.9l-4.8-28.7l-0.1-0.9l-2.5-8.6v-18.5l7.4-11.1l9.9-1.2l8.6,3.7v-3.7l7.4-3.7l-23.4-13.6l-2.5-28.4l6.2-13.6l-11.1,3.7
	L416.9,419l-6.2-12.3l9.9-6.2v-3.7l-12.3-7.4l-8.6-2.5l-9.9,6.2l-7.4-2.5l-35.8-23.4l-7.4-9.9l-12.3-14.6l1.1-1.8l-3.7-9.5l7.1-9.5
	l1.9-9.4l5.6-5.9l4.9,2.6l2.2-1.3l5.4-12.5l6.9-1l3.3-6.3l15.1-1.7l31.5-27.6l15.2-3.5l6.2-5.7l-0.2-9.3l-5.9-10.7l1.6-13.6
	l-1.6-4.7l6.2-0.2l7.4,9.9l21-9.9h23.4l2.5-7.4V200l2.5-9.9l37,28.4c0,0,3.7-8.6,7.4-8.6c3.7,0,18.5,11.1,18.5,11.1l3.4,0.1
	l-1.6,38.7l7.4,6.2v28.4l-19.7-4.9l-2.5,19.7h-11.1l-4.9,6.2l-21-3.7v14.8l2.5,3.7l6.2,16v16l-3.7,11.1l7.4,6.2V398l19.7,1.2v7.4
	h4.9l9.9,56.7l14.8,44.4l9.9,40.7l19.7,23.4L594.1,591.6z"/>
<polygon class="st0" points="460.1,481.9 452.7,485.6 452.7,489.3 444.1,485.6 434.2,486.8 426.8,497.9 426.8,516.4 429.2,525.1 
	429.4,525.9 418.1,534.9 403.3,542.3 378.7,558.4 375,565.8 370,565.8 361.4,558.4 344.6,554.5 343.9,553.8 338.5,553.1 
	338.4,553.1 334.9,552.4 334.9,552.3 322,546.3 321,527.2 313,520.1 306.6,503.3 316.6,493.1 325.1,490.6 331.9,485.4 334.8,475.5 
	332.8,468.7 336.1,466.7 334.2,461.6 340.1,442 332.6,419 336.6,414.2 333.6,389.4 321.4,351.8 326.9,342.6 339.2,357.3 
	346.6,367.1 382.4,390.6 389.8,393 399.6,386.9 408.3,389.3 420.6,396.7 420.6,400.4 410.7,406.6 416.9,419 429.2,430.1 
	440.3,426.4 434.2,439.9 436.7,468.3 "/>
<polygon class="st0" points="372.5,613.9 382.2,620.6 362.6,615.1 351.9,610.2 349.1,608.9 312,608.9 287,623.9 291.8,613.2 
	301.3,604.8 311.6,602.2 314.6,606.5 321.3,607.7 325.3,603.5 328,593.9 340.2,591.5 348.6,573 347.4,557.9 344.6,554.5 
	361.4,558.4 370,565.8 375,565.8 371.3,580.6 366.3,589.2 377.4,600.3 394.7,604 397.2,606.5 375,610.2 "/>
<polygon class="st0" points="351.9,610.2 347.8,637.3 341.7,644.7 334.2,650.9 324.4,650.9 275,722.6 272.6,726.1 262.7,731.1 
	239.3,743.4 211.5,743.4 205.1,677.9 207.7,662.8 215.8,656.6 224.4,653.5 270.7,647.1 276.1,629 286.7,624.5 287,623.9 287,623.9 
	312,608.9 349.1,608.9 "/>
<polygon class="st0" points="710.4,296.6 708.2,308.1 693,318.5 692,335.4 682.6,342.9 678.9,384.5 671.7,414.7 662.8,440.6 
	656.4,469.5 643.3,495.7 647.1,519.8 628,584.5 622.3,597.8 594.6,594.1 594.1,591.6 590.9,571.9 571.1,548.5 561.3,507.8 
	546.4,463.4 536.5,406.6 556.3,406.6 558.8,396.7 561.3,396.7 566.2,395.5 569.9,391.8 574.8,396.7 581,400.4 581,396.7 
	588.4,388.1 588.4,379.5 577.3,379.5 577.3,372.1 579.8,361 585.9,346.2 588.4,333.8 588.4,327.7 597,333.8 605.7,333.8 
	609.4,316.6 613.1,316.6 622.9,311.6 622.9,295.6 618,288.2 620.5,282 618,273.4 622.9,268.4 622.9,249.9 625.4,240.1 631.6,233.9 
	639.5,223.7 640.1,225.2 648.6,230.9 649.9,234.8 647.8,236.8 638.8,239.1 635.5,242.7 638.9,252.6 669.7,266 706.7,272.1 
	709.4,278.6 "/>
<polygon class="st0" points="639.5,223.7 639.5,223.7 631.6,233.9 625.4,240.1 622.9,249.9 622.9,268.4 618,273.4 620.5,282 
	618,288.2 622.9,295.6 622.9,311.6 613.1,316.6 609.4,316.6 605.7,333.8 597,333.8 588.4,327.7 588.4,333.8 585.9,346.2 579.8,361 
	577.3,372.1 577.3,379.5 588.4,379.5 588.4,388.1 581,396.7 581,400.4 574.8,396.7 569.9,391.8 566.2,395.5 561.3,396.7 
	558.8,396.7 556.3,406.6 531.6,406.6 531.6,399.2 511.9,398 511.9,379.5 504.5,373.3 508.2,362.2 508.2,346.2 502,330.1 
	499.6,326.4 499.6,311.6 520.5,315.3 525.5,309.2 536.6,309.2 539,289.4 558.8,294.3 558.8,266 551.4,259.8 553,220.9 558.2,220.9 
	560.6,233.3 571.7,245.6 585.3,245.6 593.9,235.7 602.6,227.1 602.6,223.4 638.3,220.6 "/>
<polygon class="st0" points="684.6,1007.4 684.6,997.6 661.2,997.6 661.2,943.3 672.3,927.2 667.4,911.2 652.6,885.3 642.7,868 
	642.7,855.7 626.6,843.3 626.6,822.4 622.9,802.6 616.8,786.4 616.8,786.4 616.8,786.4 618,778 615.5,769.3 615.5,753.3 
	620.5,743.4 623.4,729.6 624.2,726.1 631.6,720 641.4,707.6 643.9,684.2 630.3,665.7 627.2,661.1 643.1,665.5 676.6,680.2 
	680.2,685.6 686.4,712.1 691.2,722.9 694.2,727.8 709.9,737.9 713,742.4 710,747.9 697.3,750.8 693.9,753.5 688.9,764.8 
	686.2,781.8 686.9,785.9 690.6,787.9 706.5,788.1 718.6,793.5 718.1,796.8 706.5,808.1 701.4,821.5 703.3,835.3 697.9,846 
	699.1,859.2 709.2,873.9 714.1,885.6 711,910.5 701.4,925.6 698,936.1 697.8,945.8 712.5,977.4 719.8,988 724.1,1005.5 
	725.9,1007.3 "/>
<polygon class="st0" points="849,1055.3 841.1,1084 837,1090.7 827.1,1101.4 813.5,1107.1 813.8,1110.4 818.4,1112.9 820.5,1118.3 
	811.6,1138.2 790.5,1124.3 776.9,1121.1 746.5,1105.8 744.2,1100.2 733.8,1099.3 713.4,1085.4 663,1063.6 658,1059.9 657.6,1056.7 
	649,1056.7 592.7,1033 587.7,1028.8 569.6,1025.1 555.1,1027 551.9,1024.2 539.6,1024.2 533.7,1033.5 528.3,1036.3 522.8,1031.6 
	496.1,1024.7 485.6,1029.3 473,1019.6 462,1015.9 452.7,1016.1 452.7,988.9 461.3,982.8 461.3,950.7 445.7,926 463.8,926 
	471.2,948.2 499.6,938.3 505.6,935.3 505.6,935.3 558.4,937.9 563.7,943.3 587.2,943.3 594.1,950.9 599.5,956.8 622.9,972.9 
	622.9,982.8 639,977.8 653.8,969.2 661.2,969.2 661.2,997.6 684.6,997.6 684.6,1007.4 725.9,1007.3 736.6,1017.4 737.9,1027.6 
	734.4,1036.4 734.9,1041.1 742.1,1045.7 758.6,1047.3 775.7,1053 781.1,1048.4 780.4,1035.4 783.5,1029.9 781,1026.8 782.2,1024 
	809.7,1023.6 810.8,1033.7 807.8,1050.7 818,1053.4 845.3,1049 848.6,1050.9 "/>

<polyline class="st0" points="286.5,624.2 287,623.9 287,623.9 "/>
<polygon class="st0" points="392.4,626.4 387.3,648.4 384.8,657.1 382.4,670.6 377.4,679.3 375,692.8 370,702.7 370,711.3 
	367.6,723.7 363.9,739.7 363.9,745.9 328.1,745.9 314.3,742.4 308.3,741 297.2,741 286.1,739.7 283,735 275,722.6 324.4,650.9 
	334.2,650.9 341.7,644.7 347.8,637.3 351.9,610.2 362.6,615.1 382.2,620.6 382.2,620.6 388.5,625 "/>
<polygon class="st0" points="487.9,707.9 474.9,715 465,722.4 449,733.5 434.2,743.4 425.5,754.5 391.3,757.8 388.5,753.3 
	363.9,743.4 363.9,739.7 367.6,723.7 370,711.3 370,702.7 375,692.8 377.4,679.3 382.4,670.6 384.8,657.1 387.3,648.4 392.4,626.4 
	405.8,631.1 416.9,644.7 414.4,654.6 412,665.7 414.4,665.1 451.5,686.7 465,690.4 476.1,690.4 482.3,706.4 "/>
<path class="st0" d="M524.2,796.5v16l-7.4,18.5l-6.2,19.7l2.5,21l-6.2,29.6l-1.2,11.1c0,0,1.2,6.2,1.2,7.4c0,1.2,2.5,13.6,2.5,13.6
	l-3.9,1.9h0l-6,3l-28.4,9.9l-7.4-22.2h-18.1l-1.6-2.6l-17.3-35.7l-7.4-9.9v-28.4l2.5-4.9l-2.5-18.5l3.7-8.6l-19.7-29.6l-11.1-28.4
	l-1-1.6l34.3-3.3l8.6-11.1l14.8-9.9l16-11.1l9.9-7.4l13-7.1l8,2.2l8.6-7.4l16-1.2l-16,24.7l-1.2,13.6l11.1,21l-1.2,30.8L524.2,796.5
	z"/>
<polygon class="st0" points="611.8,815 611.8,831 605.7,833.5 605.7,863.1 599.5,891.5 594.6,912.4 597,926 594.1,950.9 
	587.2,943.3 563.7,943.3 558.4,937.9 555.1,934.6 558.8,926 561.3,914.9 558.8,906.3 558.8,876.7 562.5,869.3 562.5,854.5 
	574.8,838.4 574.8,826.1 588.4,815 590.9,808.8 590.9,798.9 599.5,798.9 608.4,796.9 608.1,815 "/>
<polygon class="st0" points="672.3,927.2 661.2,943.3 661.2,969.2 653.8,969.2 639,977.8 622.9,982.8 622.9,972.9 599.5,956.8 
	594.1,950.9 597,926 594.6,912.4 599.5,891.5 605.7,863.1 605.7,833.5 611.8,831 611.8,815 608.1,815 608.4,796.9 608.4,796.9 
	615.5,795.2 616.8,786.4 622.9,802.6 626.6,822.4 626.6,843.3 642.7,855.7 642.7,868 652.6,885.3 667.4,911.2 "/>
<polyline class="st0" points="627.2,661.1 625.3,658.3 625.2,658.2 "/>
<polyline class="st0" points="686.8,785.6 664.9,768.1 664.9,750.8 656.2,750.8 652.5,732.3 637.7,732.3 623.4,729.6 "/>
<polyline class="st0" points="616.8,786.4 645.1,774.3 653.8,774.3 668.3,770.9 "/>

	</svg>
</div>
</center>         	
         </div> 
	
         <div class="col s3 fsection">
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
         			background-color: #42A5F5!important;
         			height: 1px!important;
         			height: 120px!important;
         		}
         		.active-orange{
         			background-color: #ff9800!important;
         			height: 100px!important;
         			color: white;
         			height: 120px!important;
         		}
         		.active-green{
         			background-color: #8bc34a!important;
         			height: 100px!important;
         			height: 120px!important;
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
         		.dropdown-content li a{
         			height: 40px;
         			margin-top: 0px;
         			font-size: 9px;
         			text-align: left;
         			font-weight: bold;
         			line-height: 15px;
         		}
         		.responsive{
						width: 500px;
						position: static;
					}
         		@media only screen and (min-width: 1466px) {
	         	
	         		.active-blue{
	         			background-color: #42A5F5!important;
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
	         			background-color: #42A5F5!important;
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
						
				
					}
         		}
				@media only screen and (max-width: 1366px) {
					.fsection-info{
						width: 26%!important
					}

					.map-depart{
						left:-5em!important;
					}
					.responsive{
						width: 450px;
					}
					.ulcontent li a{
						width: 121px;
						font-size: 13px;
					}
				}
         	</style>
         	<div class="container">
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
			</div>
         	<nav class ="comnav" style="">
			    <div class="nav-wrapper nav-option" >
			      <ul class="ulcontent " style="line-height: 20px; text-align: center; color: ">
			        <li class="1 option-map border dropdown-button" data-activates="dropdown1"><a  style="" class="" href="#!" >Necesidades Basicas</a></li>
			        <li class="2 option-map dropdown-button" data-activates="dropdown2"><a style="" class="dropdown-button" href="#!" data-activates="dropdown2">Fundamentos de Bienestar</a></li>
			        <li class="3 option-map border1 dropdown-button" data-activates="dropdown3"><a style="" class="dropdown-button" href="#!" data-activates="dropdown3"><p style="position: relative; left:-4px; top: 6px;color: #085eaa!important;font-weight: 400;font-size: 15px;">Oportunidades</p></a></li>
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
				    xmlhttp.open("GET","getuser.php?id=<?php echo $id?>&q="+compo,true);
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