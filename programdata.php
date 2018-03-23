<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
.error{
    font-size: 25px!important;
    color: #F44336;
    font-weight: bold;
    padding:20px!important;
}
.programs p {
    color: #9E9E9E;
    font-weight: 300;
    font-size: 18px!important;
    font-family: 'Roboto';
    line-height: 15px;
}
  .img-data img{
    object-fit: cover;
    height: 14em;
  }
.programs h3{
    font-size: 20px!important;
}
.plus{
    width: 24px;  
    height:24px;
    background-image: url(data:image/svg+xml;utf8,<svg aria-hidden="true" data-prefix="fal" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-plus-circle fa-w-16" style="font-size: 48px;"><path fill="currentColor" d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z" class=""></path></svg>);

}
</style>
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
            
            $compo=mysqli_real_escape_string($db->connect(), $comp);
            $dep=mysqli_real_escape_string($db->connect(), $p);
            $prueba=$db->preSelectSpecific("f.nombre_fundaorg, p.nombre_prog, c.nombre_comp, p.imagen",
               "programa_ips as p 
                inner join proxcomp as pc on pc.id_prog = p.id_prog
                inner join componentes as c on c.id_comp = pc.id_comp
                inner join proxmuni as pm on pm.id_prog = p.id_prog 
                inner join municipio as m on m.id_muni = pm.id_muni
                inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto
                inner join fundaorg_ips as f on f.id_fundaorg = ci.id_fundaorg 
                inner join departamento as d on d.id_dep = m.id_dep 
                ", 
                " d.nombre_dep like '$dep' and c.nombre_comp like '$comp'");
            if(!empty($prueba)){
                foreach ($prueba as $key) {
                echo '
                <div class="row" style="margin-bottom:0!important;">
                <div class="col s4 img-data" style="display:flex;justify-content:center;">
                    <a href="#" title="Lorem ipsum" class="thumbnail" style="display:flex;">';
                        if(empty($key["imagen"])){
                          echo '<img width="300" src="https://dvynr1wh82531.cloudfront.net/sites/default/files/styles/large/public/default_images/noImg_2.jpg?itok=jYUFbkTS" class="center" alt="Lorem ipsum" />';
                        }
                        else{
                          echo'<img width="300" src="cms/img/programa/'.$key["imagen"].'" class="center" alt="Lorem ipsum" />';
                        }
                echo'</a>
                </div>
                <div class="col s8 programs" style="text-align: left; color:gray; font-weight:bold;">
                    <h3 style="font-size: 17px; text-align: left;">
                    <div style="width:25em!important;">
                        <a href="#" style=" color:gray!important; font-weight:bold;word-break:keep-all;">'.$key["nombre_prog"].' </a>
                    </div>
                        <span class="right" style="color:#38aab3; margin-top:-1em;font-weight:bolder;vertical-align:middle;"><svg aria-hidden="true" data-prefix="fal" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-plus-circle fa-w-16" style="font-size: 20px;"><path fill="currentColor" d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z" class=""></path></svg><a href="programas.php?pro='.$key["nombre_prog"].'&comp='.$comp.'">&nbsp;Ver más</a></span>
                    </h3>
                    <p style="font-size:15px;">'.$key["nombre_fundaorg"].
                    //.' - '.$key["nombre_prog"].'
                    '</p>
                    <p style="font-size:12px;">COMPONENTE IPS: '.$key["nombre_comp"].'</p>
                    <p style="font-size:12px; line-height:1.5">AREA GEOGRAFICA DE ALCANCE: ';
                    $nombre_prog=mysqli_real_escape_string($db->connect(), $key["nombre_prog"]);
                    $geo=$db->preSelectSpecific("d.nombre_dep","programa_ips as p 
                                     inner join proxcomp as pc on pc.id_prog = p.id_prog 
                                     inner join proxmuni as pm on pm.id_prog = p.id_prog 
                                     inner join municipio as m on m.id_muni = pm.id_muni
                                     inner join componentes as c on c.id_comp = pc.id_comp  
                                     inner join departamento as d on d.id_dep = m.id_dep 
                                     ", "p.nombre_prog like'$nombre_prog' and c.nombre_comp like '$comp'");
                    foreach ($geo as $val){
                        echo $val["nombre_dep"].", ";
                    }
                    echo '</p>
                    <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
                </div>
                </div>
                <hr style="border:0.7px solid #BDBDBD!important;">';
                }
            }
            else{  echo '<h3 class="error">NO SE HAN ENCONTRADO REGISTROS</h3>';
            } ?>
</body>
<script type="text/javascript">
    $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });
</script>
</html>