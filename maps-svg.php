<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
include ('cms/classes/DB.class.php'); 
     if (file_exists('cms/config.php')) {
        require_once 'cms/config.php'; 
        require_once 'cms/version.php'; 
    }else{
        header("Location: installation");
        exit();
    }
    $db = new DB(); 
    $comp = $_GET['q'];
    $p = $_GET['id'];
    if($p == "usulután"){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="80 -90 1450 1540" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
    <?php
    }else if($p=="chalatenango"){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 -150 1860 1740" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
    
    <?php
    }else if($p == "cabañas" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 -300 1300 1440" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "san salvador" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 2 1000 1140" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "santa ana" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 0 950 1240" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "ahuachapán" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 80 1000 1100" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "sonsonate" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 100 900 1000" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "la libertad" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="20 -20 1100 1200" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
        <?php
    }else if($p == "cuscatlán" ){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="-30 20 1600 1740" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="100%">
        
    <?php
    }else if($p == "cuscatlán" || $p == "la unión" || $p == "san miguel" || $p == "morazán"){?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="40 60 1610 1840" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="600">
        
    <?php
    }else{
    ?>
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="20 60 1310 1290" style="enable-background:new 0 0 900 1200;" xml:space="preserve" width="620">
    
<?php } ?>
    <style type="text/css">
    .st0{fill:#F4F4F4;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
    .st0:hover{fill:yellow;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
    .st1{fill:none;stroke:#00AFBE;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
    .st2{fill:blue;stroke:#ffffff;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
    .st3{fill:orange;stroke:#ffffff;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
    .st4{fill:green;stroke:#ffffff;stroke-width:3;stroke-linecap:round;stroke-linejoin:round; transition: fill .4s ease;}
    </style>
    <?php
    $prueba=$db->selectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag", "departamento as d 
    inner join municipio as m on m.id_dep = d.id_dep ", "nombre_dep like '$p'");
    foreach ($prueba as $key) {
        if($key["tag"] == "path"){
                echo '<'.$key["tag"].' class="st0" d="'.$key["mapvalue"].'"/>';
        }
        else if($key["tag"] == "polygon"){
                echo '<'.$key["tag"].' class="st0" points="'.$key["mapvalue"].'"/>';    
        }
    }

    $prueba=$db->preSelectSpecific("d.id_dep, d.nombre_dep, m.mapvalue, m.tag, s.nombre_servicio, m.nombre_muni", 
    "programa_ips as p 
    inner join proxcomp as pc on pc.id_prog = p.id_prog
    inner join componentes as c on c.id_comp = pc.id_comp
    inner join proxmuni as pm on pm.id_prog = p.id_prog 
    inner join municipio as m on m.id_muni = pm.id_muni
    inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto
    inner join fundaorg_ips as f on f.id_fundaorg = ci.id_fundaorg
    inner join servicios_ips as s on s.id_servicio = c.id_servicio 
    inner join departamento as d on d.id_dep = m.id_dep ", "d.nombre_dep like '$p' and c.nombre_comp like '$comp' ");
    foreach ($prueba as $key) {
    if($key["tag"] == "path"){
        if($key["nombre_servicio"] == "Necesidades Basicas"){
            echo '<'.$key["tag"].' class="st2" d="'.$key["mapvalue"].'"/>';
        }
        else if($key["nombre_servicio"] == "Fundamentos de Bienestar"){
            echo '<'.$key["tag"].' class="st3" d="'.$key["mapvalue"].'"/>';
        }
        else if ($key["nombre_servicio"] == "Oportunidades"){
            echo '<'.$key["tag"].' class="st4" d="'.$key["mapvalue"].'"/>';
        }
    }
    else if($key["tag"] == "polygon"){
        if($key["nombre_servicio"] == "Necesidades Basicas"){
            echo '<'.$key["tag"].' class="st2" points="'.$key["mapvalue"].'"/>'; 
        }
        else if($key["nombre_servicio"] == "Fundamentos de Bienestar"){
            echo '<'.$key["tag"].' class="st3" points="'.$key["mapvalue"].'"/>';
        }
        else if ($key["nombre_servicio"] == "Oportunidades"){
            echo '<'.$key["tag"].' class="st4" points="'.$key["mapvalue"].'"/>'; 
        }   
    }
}?>
    </svg>
</body>
<script type="text/javascript">
    $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });
</script>
</html>