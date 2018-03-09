<?php
$msg = "";
$levelname="";
$levelactPrinc="";
$levelproposito="";
$levelactEsp="";
$levelurlwebsite="";
$levelcantBenef="";
$levelindMetricas="";
$levelinstpriv="";
$levelinstpubli="";
$levelimg="http://www.freeiconspng.com/uploads/no-image-icon-13.png";
$modetype = "add";
if(isset($_POST['submit-form'])) {
        $levelmodules = json_encode($levelmodules);
        if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
            {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["name"]);
        $name2=$_FILES["userfile"]["name"];
        $type=$_FILES["userfile"]["type"];
        $destino = "img/programa/".$name;
        if (copy($_FILES['userfile']['tmp_name'],$destino)){
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
            
        );
        if ($mode == "add") {
            $db->insert($data, "programa_ips");
            $db->insert($data2, "imagephp");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["add_success"]."</div>";
        }
        if ($mode == "update") {
            $db->update($data, "programa_ips", "id_prog = $levelid");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["update_success"]."</div>";
        }
    }
}}
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
        $datarow = $db->select("programa_ips","id_prog = $levelid");
        $levelname = $datarow[0]['nombre_prog'];
        $levelactPrinc_prog = $datarow[0]['actPrinc_prog'];
        $levelproposito_prog = $datarow[0]['proposito_prog'];
        $levelactEsp_prog = $datarow[0]['actEsp_prog'];
        $levelurlwebsite_fundaorg = $datarow[0]['urlwebsite_fundaorg'];
        $levelcantBenef = $datarow[0]['cantBenef'];
        $levelindMetricas = $datarow[0]['indMetricas'];
        $levelinstpriv_prog = $datarow[0]['instpriv_prog'];
        $levelinstpubli_prog = $datarow[0]['instpubli_prog'];
        
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
                        
                        $list_programs = $db->select("programa_ips","id_prog > 0 ORDER BY id_prog ASC");
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
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["proposito"]?></label>
                        <input type="text" name="proposito" class="form-control" required value="<?=$levelproposito_prog?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["actEsp"]?></label>
                        <input type="text" name="actEsp" class="form-control" required value="<?=$levelactEsp_prog?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["urlwebsite"]?></label>
                        <input type="text" name="urlwebsite" class="form-control" required value="<?=$levelurlwebsite_fundaorg?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["cantBenef"]?></label>
                        <input type="text" name="cantBenef" class="form-control" required value="<?=$levelcantBenef?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["indMetricas"]?></label>
                        <input type="text" name="indMetricas" class="form-control" required value="<?=$levelindMetricas?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["instpriv"]?></label>
                        <input type="text" name="instpriv" class="form-control" required value="<?=$levelinstpriv_prog?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["instpubli"]?></label>
                        <input type="text" name="instpubli" class="form-control" required value="<?=$levelinstpubli_prog?>">
                    </div>
                    <input type="hidden" name="mode" value="<?=$modetype?>">
                    <input type="hidden" name="levelid" value="<?=$levelid?>">
                    <button type="submit" name="submit-form" class="btn btn-default"><?=$lan["save"]?></button>
                  </form>

                </div>

        </div>
    </div>

  </div>



</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 