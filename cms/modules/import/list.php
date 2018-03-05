<?php
$msg = "";
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $userid = $_GET['id'];

  if($mode=="delete"){
    $db->delete("product", "id = $userid");
      $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["delete_success"]."</div>";
  }
}

if(!empty($_FILES['prueba']['name'])){ //this is just to check if isset($_FILE). Not required.s
            function excelDateToDate($readDate){
                $phpexcepDate = $readDate-25569; //to offset to Unix epoch
                return strtotime("+$phpexcepDate days", mktime(0,0,0,1,1,1970));
            }

            require_once 'classes/PHPExcel.php';

            $test = false;
            $data = array();
            $documento = $_FILES['prueba']['name'];
            $tipo = $_FILES['prueba']['type'];
            $destino = "modules/import/data/".$documento;
            if (copy($_FILES['prueba']['tmp_name'],$destino)){
            echo "Archivo Cargado Con Exito";
            $objReader = PHPExcel_IOFactory::createReader('Excel2007');
            $objPHPExcel = $objReader->load("modules/import/data/".$documento);
            $cantidad = $objPHPExcel->getSheetCount();

            

            for ($i=0; $i < $cantidad; $i++){ 
                if ($i==0) {
                    $objWorksheet = $objPHPExcel->setActiveSheetIndex($i);

                    //Getting the data for "clasificacion_ips"
                    for ($j=4; $j <= 7; $j++) {    
                        $nombre_clasif = $objWorksheet->getCell('B'.$j);
                        $exist=$db->select("clasificacion_ips", "nombre_clasif like '$nombre_clasif'");
                        if(empty($exist)){
                            $bandera = array(
                               "nombre_clasif" => "'$nombre_clasif'",
                            );    
                            $db->insert($bandera, "clasificacion_ips");
                        }
                    }

                    //Getting the data for "objetivosdesarrollo_ips"
                    for ($j=9; $j <= 25; $j++) {    
                        $descripcion_objetivo = $objWorksheet->getCell('B'.$j);
                        $exist=$db->select("objetivosdesarrollo_ips", "descripcion_objetivo like '$descripcion_objetivo'");
                        if(empty($exist)){
                            $bandera = array(
                               "descripcion_objetivo" => "'$descripcion_objetivo'",
                            );    
                            $db->insert($bandera, "objetivosdesarrollo_ips");
                        }
                    }

                    //Getting the data for "componentes"
                    for ($j=27; $j <= 38; $j++) {    
                        $nombre_comp = $objWorksheet->getCell('B'.$j);
                        $exist=$db->select("componentes", "nombre_comp like '$nombre_comp'");
                        if(empty($exist)){
                            $bandera = array(
                               "nombre_comp" => "'$nombre_comp'",
                            );    
                            $db->insert($bandera, "componentes");
                        }
                    }

                    //Getting the data for "departamento"
                    for ($j=3; $j <= 16; $j++) {    
                        $nombre_dep = $objWorksheet->getCell('D'.$j);
                        $exist=$db->select("departamento", "nombre_dep like '$nombre_dep'");
                        if(empty($exist)){
                            $bandera = array(
                               "nombre_dep" => "'$nombre_dep'",
                            );    
                            $db->insert($bandera, "departamento");
                        }
                    }

                    //Getting the data for "municipio"
                    $depidaux="";
                    $depid="";
                    for ($j=3; $j <= 265; $j++) {    
                        $nombre_muni = $objWorksheet->getCell('G'.$j);
                        $tempnombre_dep = $objWorksheet->getCell('F'.$j);
                        $exist = $db->select("municipio", "nombre_muni like '$nombre_muni'");
                        $depidquery = $db->selectSpecific("id_dep","departamento", "nombre_dep like '$tempnombre_dep'");
                        if(empty($depidquery)){
                            $depid = $depidaux;
                        }
                        else{
                            $depid = implode($depidquery[0]);
                            $depidaux = $depid;
                        }
                        if(empty($exist)){

                            $bandera = array(
                               "nombre_muni" => "'$nombre_muni'",
                               "id_dep" => intval($depid),
                            );    
                            $db->insert($bandera, "municipio");
                        }
                        
                    }
                }
                else{   
                    $objWorksheet = $objPHPExcel->setActiveSheetIndex($i);
                    $maxCell = $objWorksheet->getHighestRowAndColumn();

                    $totalRows = $maxCell['row'];

                    // Getting columns data for the "programa_ips" table
                    $nombre_prog = $objWorksheet->getCell('C2');
                    $actPrinc = $objWorksheet->getCell('C5');
                    $proposito_prog = $objWorksheet->getCell('C8');
                    $actEsp = $objWorksheet->getCell('C9');
                    $urlwebsite_fundaorg = $objWorksheet->getCell('C10');
                    $cantBenef = $objWorksheet->getCell('C12');
                    $indMetricas = $objWorksheet->getCell('C32');
                    $instpriv_prog = $objWorksheet->getCell('C17');
                    $instpubli_prog = $objWorksheet->getCell('C18');
                    $exist=$db->select("programa_ips", "nombre_prog like '$nombre_prog'");
                    if(empty($exist)){
                        $bandera = array(
                            "nombre_prog" => "'$nombre_prog'",
                            "actPrinc_prog" => "'$actPrinc'",
                            "proposito_prog" => "'$proposito_prog'",
                            "actEsp_prog" => "'$actEsp'",
                            "urlwebsite_fundaorg" => "'$urlwebsite_fundaorg'",
                            "cantBenef" => "'$cantBenef'",
                            "indMetricas" => "'$indMetricas'",
                            "instpriv_prog" => "'$instpriv_prog'",
                            "instpubli_prog" => "'$instpubli_prog'",
                        );
                        $db->insert($bandera, "programa_ips");
                    }

                    // Getting columns data for the "fundaorg_ips" table
                    $nombre_fundaorg = $objWorksheet->getCell('C3');
                    $exist=$db->select("fundaorg_ips", "nombre_fundaorg like '$nombre_fundaorg'");
                    if(empty($exist)){
                        $bandera = array(
                           "nombre_fundaorg" => "'$nombre_fundaorg'",
                        );    
                        $db->insert($bandera, "fundaorg_ips");
                    }

                    // Getting columns data for the "contactoorg_ips" table
                    $nombre_contactoorg = $objWorksheet->getCell('C20');
                    $cargo_contactoorg = $objWorksheet->getCell('C21');
                    $mail_contactoorg = $objWorksheet->getCell('C22');
                    $urlwebsite_contactoorg = $objWorksheet->getCell('C23');
                    $telefono = $objWorksheet->getCell('C24');
                    $exist=$db->select("contactoorg_ips", "nombre_contactoorg like '$nombre_contactoorg'");
                    $tempnombre_fundaorg = $objWorksheet->getCell('C3');
                    $depidquery = $db->selectSpecific("id_fundaorg","fundaorg_ips", "nombre_fundaorg like '$tempnombre_fundaorg'");
                    if(empty($depidquery)){
                        $depid = $depidaux;
                    }
                    else{
                        $depid = implode($depidquery[0]);
                        $depidaux = $depid;
                    }
                    if(empty($exist)){
                        $bandera = array(
                           "nombre_contactoorg" => "'$nombre_contactoorg'",
                           "cargo_contactoorg" => "'$cargo_contactoorg'",
                           "mail_contactoorg" => "'$mail_contactoorg'",
                           "urlwebsite_contactoorg" => "'$urlwebsite_contactoorg'",
                           "telefono" => "'$telefono'",
                           "id_fundaorg" => intval($depid),
                        );    
                        $db->insert($bandera, "contactoorg_ips");
                    }

                    // Getting columns data for the "contactoorg_ips" table
                    $nombre_contactoorg = $objWorksheet->getCell('C20');
                    $cargo_contactoorg = $objWorksheet->getCell('C21');
                    $mail_contactoorg = $objWorksheet->getCell('C22');
                    $urlwebsite_contactoorg = $objWorksheet->getCell('C23');
                    $telefono = $objWorksheet->getCell('C24');
                    $exist=$db->select("contactoorg_ips", "nombre_contactoorg like '$nombre_contactoorg'");
                    $tempnombre_fundaorg = $objWorksheet->getCell('C3');
                    $depidquery = $db->selectSpecific("id_fundaorg","fundaorg_ips", "nombre_fundaorg like '$tempnombre_fundaorg'");
                    if(empty($depidquery)){
                        $depid = $depidaux;
                    }
                    else{
                        $depid = implode($depidquery[0]);
                        $depidaux = $depid;
                        if(empty($exist)){
                            $bandera = array(
                               "nombre_contactoorg" => "'$nombre_contactoorg'",
                               "cargo_contactoorg" => "'$cargo_contactoorg'",
                               "mail_contactoorg" => "'$mail_contactoorg'",
                               "urlwebsite_contactoorg" => "'$urlwebsite_contactoorg'",
                               "telefono" => "'$telefono'",
                               "id_fundaorg" => intval($depid),
                            );    
                            $db->insert($bandera, "contactoorg_ips");
                        }
                    }
                    

                    //foreign keys
                    //"funxclas" table
                    $nombre_fundaorg = $objWorksheet->getCell('C3');
                    $nombre_clasif = $objWorksheet->getCell('C4');
                    $fundidquery = $db->selectSpecific("id_fundaorg","fundaorg_ips", "nombre_fundaorg like '$nombre_fundaorg'");
                    $clasifidquery = $db->selectSpecific("id_clasif","clasificacion_ips", "nombre_clasif like '$nombre_clasif'");
                    $fundid = implode($fundidquery[0]);
                    $clasifid = implode($clasifidquery[0]);
                    $exist=$db->select("funxclas", "id_fundaorg like '$fundid' and id_clasif like '$clasifid'");
                    if(empty($exist)){
                        $bandera = array(
                           "id_clasif" => intval($clasifid),
                           "id_fundaorg" => intval($fundid),
                        );    
                        $db->insert($bandera, "funxclas");
                    }

                    //"proxobj" table
                    $obj="";
                    $objaux="";
                    $prog="";
                    $progaux="";
                    for ($z=67; $z <= 83; $z++) { 
                        $col = chr($z);
                        $descripcion_objetivo = $objWorksheet->getCell($col.'6');
                        $nombre_prog = $objWorksheet->getCell('C2');
                        $objidquery = $db->selectSpecific("id_objetivos","objetivosdesarrollo_ips", "descripcion_objetivo like '$descripcion_objetivo'");
                        $progidquery = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$nombre_prog'");
                        if(empty($objidquery) || empty($progidquery)){
                            $prog=$progaux;
                            $obj="";
                        }
                        else{
                            $obj = implode($objidquery[0]);
                            $objaux = $obj;
                            $prog = implode($progidquery[0]);
                            $progaux = $prog;
                            $exist=$db->select("proxobj", "id_objetivos like '$obj' and id_prog like '$prog'");
                            if(empty($exist)){
                                $bandera = array(
                                   "id_objetivos" => intval($obj),
                                   "id_prog" => intval($prog),
                                );    
                                $db->insert($bandera, "proxobj");
                            }
                        }
                    }

                    //"proxobj" table
                    $dep="";
                    $depaux="";
                    $prog="";
                    $progaux="";
                    for ($z=67; $z <= 81; $z++) { 
                        $col = chr($z);
                        $nombre_dep = $objWorksheet->getCell($col.'13');
                        $nombre_prog = $objWorksheet->getCell('C2');
                        $depidquery = $db->selectSpecific("id_dep","departamento", "nombre_dep like '$nombre_dep'");
                        $progidquery = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$nombre_prog'");
                        if(empty($depidquery) || empty($progidquery)){
                            $prog="";
                            $dep="";
                        }
                        else{
                            $dep = implode($depidquery[0]);
                            $depaux = $dep;
                            $prog = implode($progidquery[0]);
                            $progaux = $prog;
                            $exist=$db->select("proxdep", "id_dep like '$dep' and id_prog like '$prog'");
                            if(empty($exist)){
                                $bandera = array(
                                   "id_dep" => intval($dep),
                                   "id_prog" => intval($prog),
                                );    
                                $db->insert($bandera, "proxdep");
                            }
                        }
                    }
                    //"progxmuni" table
                    $muni="";
                    $muniaux="";
                    $prog="";
                    $progaux="";
                    for ($z=67; $z <= 81; $z++) { 
                        $col = chr($z);
                        $nombre_muni = $objWorksheet->getCell($col.'14');
                        $nombre_munitemp = explode(',' , $nombre_muni);
                        foreach($nombre_munitemp as $value =>$key) {
                            $nombre_prog = $objWorksheet->getCell('C2');
                            $munival = $key;
                            $muniidquery = $db->selectSpecific("id_muni","municipio", "nombre_muni like '$munival'");
                            $progidquery = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$nombre_prog'");
                            if(empty($muniidquery) || empty($progidquery)){
                                $prog="";
                                $muni="";
                            }
                            else{
                                $muni = implode($muniidquery[0]);
                                $muniaux = $muni;
                                $prog = implode($progidquery[0]);
                                $progaux = $prog;
                                $exist=$db->select("proxmuni", "id_muni like '$muni' and id_prog like '$prog'");
                                if(empty($exist)){
                                    $bandera = array(
                                       "id_muni" => intval($muni),
                                       "id_prog" => intval($prog),
                                    );    
                                    $db->insert($bandera, "proxmuni");
                                }
                            }
                        }
                    }

                    // Getting columns data for the "proxcomp" table
                    $compid="";
                    $compidaux="";
                    for ($z=26; $z <=30 ; $z++) { 
                        $nombre_prog = $objWorksheet->getCell('C2');
                        $nombre_comp = $objWorksheet->getCell('C'.$z);
                        $progidquery = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$nombre_prog'");
                        $compidquery = $db->selectSpecific("id_comp","componentes", "nombre_comp like '$nombre_comp'");
                        if(empty($progidquery) || empty($compidquery)){
                            $prog="";
                            $compid="";
                        }
                        else{
                            $compid = implode($compidquery[0]);
                            $prog = implode($progidquery[0]);
                            $compidaux = $compid;
                            $exist=$db->select("proxcomp", "id_prog like '$prog' and id_comp like '$compid'");
                            if(empty($exist)){
                                $bandera = array(
                                   "id_prog" => intval($prog),
                                   "id_comp" => intval($compid),
                                );    
                                $db->insert($bandera, "proxcomp");
                            }
                        }
                        
                    }

                    // Getting columns data for the "funxpro" table
                    $fundid="";
                    $fundidaux="";
                        $nombre_prog = $objWorksheet->getCell('C2');
                        $nombre_fun = $objWorksheet->getCell('C3');
                        $progidquery = $db->selectSpecific("id_prog", "programa_ips", "nombre_prog like '$nombre_prog'");
                        $compidquery = $db->selectSpecific("id_fundaorg","fundaorg_ips", "nombre_fundaorg like '$nombre_fun'");
                        if(empty($progidquery) || empty($compidquery)){
                            $prog="";
                            $fundid="";
                        }
                        else{
                            $fundid = implode($fundidquery[0]);
                            $prog = implode($progidquery[0]);
                            $fundidaux = $fundid;
                            $exist=$db->select("funxpro", "id_prog like '$prog' and id_fundaorg like '$fundid'");
                            if(empty($exist)){
                                $bandera = array(
                                   "id_prog" => intval($prog),
                                   "id_fundaorg" => intval($fundid),
                                );    
                                $db->insert($bandera, "funxpro");
                            }
                        }
                }
            }
       }
else{
    echo "Error Al Cargar el Archivo";
}
            
}



?>

<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$lan["import_tittle"]?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/product/list"><?=$lan["import_tittle"]?></a></li>
        <li class="active"><?=$lan["import_tittle"]?></li>
      </ol>



  </div>
  <!-- End Page Header -->


<div class="container-default">
    <?php  
        if($msg != ""){         
            echo "
            <div class='row'>
                <div class='col-md-12'>
                    $msg
                </div>
            </div>";
        }  
    ?> 

  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body table-responsive">
            <center>
            <style type="text/css">
                .fileLabel{
                    margin-top: 12px;
                    font-size: 24px;
                }
                .inputfile{
                    width: 0.1px;
                    height: 0.1px;
                    opacity: 0;
                    overflow: hidden;
                    position: absolute;
                    z-index: -1;
                }
                .inputfile + label {
                    cursor: pointer; /* "hand" cursor */
                }
            </style>
            <form name="import" method="post" class="image-upload" action="<?=BASE_URL?>/m/import/list" enctype="multipart/form-data">
                <input class="inputfile" id ="file" type="file" name="prueba" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
                <label for="file" class="fileLabel" id="pruebas">
                    <img src="<?=BASE_URL?>/img/excel.png">
                    <br>
                    <span>Selecciona un Archivo</span>
                </label>
                <br>
                <input type="submit" value="Importar" name="enviar" class="importar"/>
                <input type="hidden" value="upload" name="action"/>
            </form>
            <script type="text/javascript">
                $(".importar").hide();
                var inputs = document.querySelectorAll( '.inputfile' );
                Array.prototype.forEach.call( inputs, function( input )
                {
                    var label    = input.nextElementSibling,
                        labelVal = label.innerHTML;

                    input.addEventListener( 'change', function( e )
                    {
                        var fileName = '';
                        if( this.files && this.files.length > 1 ){
                            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                        }
                        else{
                            fileName = e.target.value.split( '\\' ).pop();
                        }

                        if( fileName ){
                            label.querySelector( 'span' ).innerHTML = "Archivo a importar: "+fileName;
                            $(".importar").show();

                        }
                        else{
                            label.innerHTML = labelVal;
                            $(".importar").hide();
                        }
                    });
                });
            </script>
            
            </center>
           


        </div>

      </div>
    </div>
    <!-- End Panel -->
  </div>



</div>