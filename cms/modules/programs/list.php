<?php
$msg = "";
$levelname="";
$levelactPrinc_prog="";
$levelproposito_prog="";
$levelactEsp_prog="";
$levelurlwebsite_fundaorg="";
$levelcantBenef="";
$levelindMetricas="";
$levelinstpriv_prog="";
$levelinstpubli_prog="";
$levelcontactos="";
$levelcontactosna="";
$levelimg="http://www.freeiconspng.com/uploads/no-image-icon-13.png";
$modetype = "add";
if(isset($_POST['submit-form'])) {
        $nombre_prog=$_POST['name'];
        $contactos=$_POST['contactos'];
        $levelmodules = json_encode($levelmodules);
        # Cogemos la anchura y altura de la imagen
        $name2=$_FILES["userfile"]["name"];
        $type=$_FILES["userfile"]["type"];
        $destino = "img/programa/".utf8_encode($name2);

        if(!isset($name2)){
            $name2=null;
        }
        if(copy($_FILES["userfile"]['tmp_name'],$destino)){
            echo "Todo bien";
        }

        $data = array( 
            "nombre_prog" =>"'$name'",
            "actPrinc_prog" =>"'$actPrinc'",
            "proposito_prog" =>"'$proposito'",
            "actEsp_prog" =>"'$actEsp'",
            "urlwebsite_fundaorg" =>"'$urlwebsite'",
            "cantBenef" =>"'$cantBenef'",
            "indMetricas" =>"'$indMetricas'",
            "instpriv_prog" =>"'$instpriv'",
            "instpubli_prog" =>"'$instpubli'",
            "imagen" =>"'$name2'",
            "id_contacto" => "'$contactos'",   
        );

        $id="";
        $idaux="";
        $emptygallery=$db->select("imagephp as im inner join programa_ips as p on p.id_prog = im.id_prog" ,"p.id_prog = $levelid");
        $emptygallerylength= count($emptygallery);
        mkdir("img/programa/gallery-".utf8_encode($name), 0777, true);
         for($i=0; $i < $emptygallerylength; $i++){
            $userfile = $_FILES["userfile".$i]["name"];
            if($_FILES["userfile".$i]['size'] > 0 ){
                $name2=$_FILES['userfile'.$i]["name"];
                $type=$_FILES["userfile"]["type"];
                $destino = "img/programa/gallery-".utf8_encode($name)."/".$i.'.jpg';
                if(!isset($name2)){
                    $name2=null;
                }
                    if(copy($_FILES["userfile".$i]['tmp_name'],$destino)){
                        echo "Todo bien";
                    }
                }                    
            $id = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$name'");
            $data2 = array( 
                "imagen" =>"'$name2'",
                "id_prog" => intval($id),
                );
            $j = $i-1;
            $db->update($data2, "imagephp", "id = $j");
         }
         if(empty($_FILES["userfile0"]["name"])||empty($_FILES["userfile1"]["name"])||empty($_FILES["userfile2"]["name"])||empty($_FILES["userfile3"]["name"])||empty($_FILES["userfile4"]["name"])){
         for($x=0; $x<count($_FILES["file"]["name"]); $x++){
            $file = $_FILES["file"];
            $nombre = $file["name"][$x];
            $tipo = $file["type"][$x];
            $ruta_provisional = $file["tmp_name"][$x];
            $destino1 = "img/programa/gallery-".utf8_encode($name)."/".$emptygallerylength.'.jpg';
            $valueimg=$emptygallerylength.'.jpg';
            if (copy($_FILES['file']['tmp_name'][$x],$destino1)){
                $id = $db->selectSpecific("id_prog","programa_ips", "nombre_prog like '$name'");
                if(empty($id)){
                    $id = $idaux;
                }
                else{
                    $id = implode($id[0]);
                    $idaux = $id;
                    $data2 = array( 
                        "imagen" =>"'$valueimg'",
                        "id_prog" => intval($id),
                    );  

                    $db->insert($data2, "imagephp");
                }

            $emptygallerylength++;
         }


        if ($mode == "add") {
            $db->insert($data, "programa_ips");
            $db->insert($data2, "imagephp");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["add_success"]."</div>";
            }
       
        if ($mode == "update") {
            $db->update($data, "programa_ips", "id_prog = $levelid");
            
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["update_success"]."</div>";
        }
    }}



}
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $levelid = $_GET['id'];

  if($mode=="delete"){
    $db->delete("programa_ips", "id_prog = $levelid");
      $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["delete_success"]."</div>";
  }
  if($mode=="updateform"){
    //get the info
        $modetype = "update";
        $datarow = $db->select("programa_ips as p inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto","id_prog = $levelid");
        $levelname = $datarow[0]['nombre_prog'];
        $levelactPrinc_prog = $datarow[0]['actPrinc_prog'];
        $levelproposito_prog = $datarow[0]['proposito_prog'];
        $levelactEsp_prog = $datarow[0]['actEsp_prog'];
        $levelurlwebsite_fundaorg = $datarow[0]['urlwebsite_fundaorg'];
        $levelcantBenef = $datarow[0]['cantBenef'];
        $levelindMetricas = $datarow[0]['indMetricas'];
        $levelinstpriv_prog = $datarow[0]['instpriv_prog'];
        $levelinstpubli_prog = $datarow[0]['instpubli_prog'];
        $levelcontactos = $datarow[0]['id_contactoorg'];
        $levelcontactosna = $datarow[0]['nombre_contactoorg'];
        
        if(empty($datarow[0]['imagen'])){
            $levelimg="http://www.freeiconspng.com/uploads/no-image-icon-13.png";
        }
        else{
            $levelimg = "../../img/programa/".$datarow[0]['imagen'];    
        }
  }
}
?>
<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$lan["programs_title"]?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["users"]?></a></li>
        <li class="active"><?=$lan["programs_title"]?></li>
      </ol>
  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
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
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <tbody style="display: inline-block;width: 100%;height: 500px;">
                    <tr>
                        <th><?=$lan["name"]?></th>
                        <th><?=$lan["actPrinc"]?></th>
                        <th><?=$lan["proposito"]?></th>
                        <th><?=$lan["actEsp"]?></th>
                        <th><?=$lan["urlwebsite"]?></th>
                        <th><?=$lan["cantBenef"]?></th>
                        <th><?=$lan["indMetricas"]?></th>
                        <th><?=$lan["instpriv"]?></th>
                        <th><?=$lan["instpubli"]?></th>  
                    </tr>
                   <?php
                        
                        $list_programs = $db->onlySelect("programa_ips as p inner join contactoorg_ips as ci on ci.id_contactoorg = p.id_contacto");
                        foreach ($list_programs as $key => $value) {


                            if (!empty($list_programs[$key]["google_picture"])) {
                                $avatar = $list_programs[$key]["google_picture"]; 
                            }elseif (!empty($list_programs[$key]["facebook_picture"])) {
                                $avatar = $list_programs[$key]["facebook_picture"];
                            }else{
                                $avatar = BASE_URL."/img/avatar_default.jpg";
                            }
                            
                            $id = $list_programs[$key]["id_prog"];
                        echo "
                            <tr>
                                    <td>".$list_programs[$key]["nombre_prog"]."</td>
                                    <td>".$list_programs[$key]["actPrinc_prog"]."</td>
                                    <td>".$list_programs[$key]["proposito_prog"]."</td>
                                    <td>".$list_programs[$key]["actEsp_prog"]."</td>
                                    <td>".$list_programs[$key]["urlwebsite_fundaorg"]."</td>
                                    <td>".$list_programs[$key]["cantBenef"]."</td>
                                    <td>".$list_programs[$key]["indMetricas"]."</td>
                                    <td>".$list_programs[$key]["instpriv_prog"]."</td>
                                    <td>".$list_programs[$key]["instpubli_prog"]."</td>
                                    <td>".$list_programs[$key]["nombre_contactoorg"]."</td>
                            <td>
                                <center>
                                    <div class='btn-group' role='group' aria-label='...'>
                                        <a href='".BASE_URL."/m/programs/list&mode=updateform&id=$id' class='btn btn-light btn-xs'><i class='fas fa-edit'></i></a>";
                        if (in_array("Delete", $modulesthislevel)) {      
                            echo "<a href='".BASE_URL."/m/programs/list&mode=delete&id=$id' class='btn btn-light btn-xs'><i class='fas fa-minus-circle'></i></a>";
                        }
                        echo "                                    
                                    </div>
                                </center>
                                    
                                </td>
                            </tr>                
                        ";
                        }

                    ?>

                   
                </tbody>
            </table>


        </div>

      </div>        
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="panel-title">
              <?=$lan["add_new"]?>
              <ul class="panel-tools">
                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
              </ul>
            </div>
         
        <h2>Selecciona una imagen</h2>
            <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }function readURL0(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah0').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                function readURL1(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah1').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                function readURL2(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah2').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                function readURL3(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah3').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                function readURL4(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah4').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>

                <div class="panel-body">
                  <form method="POST" enctype="multipart/form-data" action="<?=BASE_URL?>/m/programs/list">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="input1" class="form-label"><?=$lan["name"]?></label>
                          <input type="text" name="name" class="form-control" required value="<?=$levelname?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="input1" class="form-label"><?=$lan["actPrinc"]?></label>
                            <input type="text" name="actPrinc" class="form-control" required value="<?=$levelactPrinc_prog?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <center><label for="userfile" class="form-label"><img id="blah" width="200" height="150" src="<?=$levelimg?>" alt="your image" /><br>Selecciona una imagen</label></center>
                            <input style ="display: none" name="userfile" id="userfile" type="file" onchange="readURL(this);">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Galeria de Imágenes</label>
                        <br>
                        <br>
                        <div id="controlinp" class="form-group col-md-2">
                             <input  style ="display: none" class="userfile2" type="file" id="file" name="file[]" multiple accept="image/x-png,image/gif,image/jpeg">
                            <label for="file" id="labelimg" class="form-label">
                            <img id="blah" width="100" height="70" src="http://www.freeiconspng.com/uploads/no-image-icon-13.png" alt="your image" />
                            <br><span>Selecciona una imagen</span></label>

                        </div>
                        <?php 
                            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if(substr($actual_link, strrpos($actual_link, '/') + 1) != "list"){
                                $list_programs = $db->select("programa_ips as p inner join imagephp as im on im.id_prog = p.id_prog","p.nombre_prog like '$levelname' limit 5");
                                $i=0;
                                foreach ($list_programs as $key => $value) {
                                    echo '
                                    <div class="form-group col-md-2">
                                    <label for="file'.$i.'" class="form-label">
                                    <img id="blah'.$i.'" class="imgval" width="100" height="70" src="../../img/programa/gallery-'.utf8_encode($list_programs[$key]["nombre_prog"]).'/'.$i.'.jpg" alt="your image" />
                                    <input style ="display: none" name="userfile'.$i.'" id="file'.$i.'"  type="file" onchange="readURL'.$i.'(this);">
                                    <br><span>Cambia la imagen</span></label>
                                    </div>';
                                    $i++;
                                }
                            }?>
                         <div id="vista-previa"></div>
                         <div id="respuesta"></div>
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["proposito"]?></label>
                        <input type="text" name="proposito" class="form-control" required value="<?=$levelproposito_prog?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["actEsp"]?></label>
                        <textarea type="text" name="actEsp" class="form-control" required ><?=$levelactEsp_prog?></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["urlwebsite"]?></label>
                        <input type="text" name="urlwebsite" class="form-control" required value="<?=$levelurlwebsite_fundaorg?>">
                    </div>

                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["cantBenef"]?></label>
                        <textarea type="text" name="cantBenef" class="form-control" required value=""><?=$levelcantBenef?></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["indMetricas"]?></label>
                        <textarea type="text" name="indMetricas" class="form-control" required value=""><?=$levelindMetricas?></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["instpriv"]?></label>
                        <textarea type="text" name="instpriv" class="form-control" required value=""><?=$levelinstpriv_prog?></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["instpubli"]?></label>
                        <textarea type="text" name="instpubli" class="form-control" required value=""><?=$levelinstpubli_prog?></textarea> 
                    </div>
                    <select name="contactos">
                    <option value='<?=$levelcontactos?>'><?=$levelcontactosna?></option>
                        <?php 
                            $list_contacts = $db->onlySelect("contactoorg_ips"); 
                            foreach ($list_contacts as $key => $value) {
                                echo "<option value='".$list_contacts[$key]["id_contactoorg"]."'>".$list_contacts[$key]["nombre_contactoorg"]."</option>"; 
                            } 
                        ?> 
                    </select> 
                    <input type="hidden" name="mode" value="<?=$modetype?>">
                    <input type="hidden" name="levelid" value="<?=$levelid?>">
                    <button type="submit" name="submit-form" class="btn btn-default"><?=$lan["save"]?></button>
                  </form>

                </div>

        </div>
    </div>

  </div>

<script type="text/javascript">

    $(".importar").hide();
    var inputs = document.querySelectorAll( '.userfile2' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label    = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 ){
                
                fileName =  this.files.length + " Archivos subidos" ;
            }
            else{
                fileName = e.target.value.split( '\\' ).pop();
            }
            if( fileName ){
                label.querySelector( 'span' ).innerHTML = fileName;
                $(".importar").show();

            }
            else{
                label.innerHTML = labelVal;
                $(".importar").hide();
            }
        });
    });
     $(function(){   
       $("#file").on("change", function(){
           /* Limpiar vista previa */
           $("#vista-previa").html('');
           var archivos = document.getElementById('file').files;
           var navegador = window.URL || window.webkitURL;
           /* Recorrer los archivos */
           var imgval = document.getElementsByClassName("imgval");
           for(x=0; x<=(5-imgval.length); x++)
           {
               /* Validar tamaño y tipo de archivo */
               var size = archivos[x].size;
               var type = archivos[x].type;
               var name = archivos[x].name;
               if (size > 1024*1024)
               {
                   $("#vista-previa").append("<p style='color: red'>El archivo "+name+" supera el máximo permitido 1MB</p>");
               }
               else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif')
               {
                   $("#vista-previa").append("<p style='color: red'>El archivo "+name+" no es del tipo de imagen permitida.</p>");
               }
               else
               {
                 
                 if(imgval.length <5){
                    var objeto_url = navegador.createObjectURL(archivos[x]);
                     $("#vista-previa").append(" <div class='form-group col-md-2'><img class='imgval' src="+objeto_url+" width='120' height='80' style='margin-left:10px;'></div>");
                     var imgval = document.getElementsByClassName("imgval");
                 }
                 else{
                    window.alert("Solo pueden ser 5 imagenes en la galeria");
                    archivos.value="";
                 }
               }
           }
       });
       
       $("#btn").on("click", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "multiple-ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
           });
       
     });
    </script>

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 