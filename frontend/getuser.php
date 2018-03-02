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
</style>
</head>
<body>

<?php
include ('../cms/classes/DB.class.php'); 
     if (file_exists('../cms/config.php')) {
        require_once '../cms/config.php'; 
        require_once '../cms/version.php'; 
    }else{
        header("Location: installation");
        exit();
    }
    $db = new DB(); 
    $comp = $_GET['q'];
    $p = $_GET['id'];
            
            $compo=mysqli_real_escape_string($db->connect(), $comp);
            $dep=mysqli_real_escape_string($db->connect(), $p);
            $prueba=$db->select("programa_ips as p 
                inner join proxcomp as pc on pc.id_prog = p.id_prog 
                inner join proxdep as pd on pd.id_prog = p.id_prog 
                inner join funxpro as fp on fp.id_prog = p.id_prog 
                inner join departamento as d on d.id_dep = pd.id_dep 
                inner join componentes as c on c.id_comp = pc.id_comp 
                inner join fundaorg_ips as f on f.id_fundaorg = fp.id_fundaorg 
                inner join contactoorg_ips as ci on ci.id_fundaorg = f.id_fundaorg", 
                " d.nombre_dep like '$dep' and c.nombre_comp like '$comp'");
            foreach ($prueba as $key) {
            echo '
            <div class="row">
            <div class="col s4">
                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" class="center" alt="Lorem ipsum" /></a>
            </div>
            <div class="col s8" style="text-align: left; color:gray; font-weight:bold;">
                <h3 style="font-size: 17px; text-align: left;">
                    <a href="#" style=" color:gray!important; font-weight:bold;">'.$key["nombre_prog"].' </a>
                    <small class="right" style="color:#38aab3; margin-top:-7px;"><i class="fas fa-plus-circle"></i><a href="programas.php?pro='.$key["nombre_prog"].'">Ver más</a></small>
                </h3>
                <p style="font-size:15px;">'.$key["nombre_fundaorg"].
                //.' - '.$key["nombre_prog"].'
                '</p>
                <p style="font-size:12px;">COMPONENTE IPS:'.$key["nombre_comp"].'</p>
                <p style="font-size:12px;">AREA GEOGRAFICA DE ALCANCE: ';
                $nombre_prog=mysqli_real_escape_string($db->connect(), $key["nombre_prog"]);
                $geo=$db->select("programa_ips as p 
                                 inner join proxcomp as pc on pc.id_prog = p.id_prog 
                                 inner join proxdep as pd on pd.id_prog = p.id_prog 
                                 inner join funxpro as fp on fp.id_prog = p.id_prog
                                 inner join componentes as c on c.id_comp = pc.id_comp  
                                 inner join departamento as d on d.id_dep = pd.id_dep 
                                 ", "p.nombre_prog like'$nombre_prog' and c.nombre_comp like '$comp'");
                foreach ($geo as $val){
                    echo $val["nombre_dep"].", ";
                }
                echo '</p>
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
            </div>
            </div>
            <hr>';
            }
?>
</body>
</html>