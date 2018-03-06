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

.programs p {
    color: #bdbdbd;
    font-weight: 300;
    font-size: 18px!important;
    font-family: 'Roboto';
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
            <div class="col s8 programs" style="text-align: left; color:gray; font-weight:bold;">
                <h3 style="font-size: 17px; text-align: left;">
                    <a href="#" style=" color:gray!important; font-weight:bold;">'.$key["nombre_prog"].' </a>
                    <small class="right" style="color:#38aab3; margin-top:-7px;"><svg aria-hidden="true" data-prefix="fal" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-plus-circle fa-w-16" style="font-size: 20px;"><path fill="currentColor" d="M384 250v12c0 6.6-5.4 12-12 12h-98v98c0 6.6-5.4 12-12 12h-12c-6.6 0-12-5.4-12-12v-98h-98c-6.6 0-12-5.4-12-12v-12c0-6.6 5.4-12 12-12h98v-98c0-6.6 5.4-12 12-12h12c6.6 0 12 5.4 12 12v98h98c6.6 0 12 5.4 12 12zm120 6c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-32 0c0-119.9-97.3-216-216-216-119.9 0-216 97.3-216 216 0 119.9 97.3 216 216 216 119.9 0 216-97.3 216-216z" class=""></path></svg><a href="programas.php?pro='.$key["nombre_prog"].'">Ver más</a></small>
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