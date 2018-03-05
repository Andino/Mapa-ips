<?php
$msg = "";
$levelname="";
$levelclasif="";
$modetype = "add";
if(isset($_POST['submit-form'])) {
        $levelmodules = json_encode($levelmodules);
        $data = array( 
            "nombre_clasif" => "'$name'",
            "descripcion_clasif" => "'$descrip'",
        );
        if ($mode == "add") {
            $db->insert($data, "clasificacion_ips");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["add_success"]."</div>";
        }
        if ($mode == "update") {
            $db->update($data, "clasificacion_ips", "id_clasif = $levelid");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["update_success"]."</div>";
        }
}
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $levelid = $_GET['id'];

  if($mode=="delete"){
    $db->delete("clasificacion_ips", "id_clasif = $levelid");
      $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["delete_success"]."</div>";
  }
  if($mode=="updateform"){
    //get the info
        $modetype = "update";
        $datarow = $db->select("clasificacion_ips","id_clasif = $levelid");
        $levelname = $datarow[0]['nombre_clasif'];
        $levelclasif = $datarow[0]['descripcion_clasif'];
  }
}
?>
<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$lan["clasification_title"]?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["users"]?></a></li>
        <li class="active"><?=$lan["clasification_title"]?></li>
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
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th><?=$lan["name"]?></th>
                        <th><?=$lan["descrip"]?></th>
                        <th></th>
                        
                    </tr>
                </thead>
             
                <tbody>
                   <?php
                        
                        $list_clasification = $db->select("clasificacion_ips","id_clasif > 0 ORDER BY id_clasif ASC");
                        foreach ($list_clasification as $key => $value) {


                            if (!empty($list_clasification[$key]["google_picture"])) {
                                $avatar = $list_clasification[$key]["google_picture"]; 
                            }elseif (!empty($list_clasification[$key]["facebook_picture"])) {
                                $avatar = $list_clasification[$key]["facebook_picture"];
                            }else{
                                $avatar = BASE_URL."/img/avatar_default.jpg";
                            }
                            
                            $id = $list_clasification[$key]["id_clasif"];
                        echo "
                            <tr>
                                <td>".$list_clasification[$key]["nombre_clasif"]."</td>
                                <td></td>
                                <td>".$list_clasification[$key]["descripcion_clasif"]."</td>
                                <td></td>";
                                
                        echo "  <td>
                                <center>
                                    <div class='btn-group' role='group' aria-label='...'>
                                        <a href='".BASE_URL."/m/clasification/list&mode=updateform&id=$id' class='btn btn-light btn-xs'><i class='fas fa-edit'></i></a>";
                        if (in_array("Delete", $modulesthislevel)) {      
                            echo "<a href='".BASE_URL."/m/clasification/list&mode=delete&id=$id' class='btn btn-light btn-xs'><i class='fas fa-minus-circle'></i></a>";
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
    <div class="col-md-4">
        <div class="panel panel-default">

            <div class="panel-title">
              <?=$lan["add_new"]?>
              <ul class="panel-tools">
                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
              </ul>
            </div>

                <div class="panel-body">
                  <form method="POST" action="<?=BASE_URL?>/m/clasification/list">
                    <div class="form-group">
                      <label for="input1" class="form-label"><?=$lan["name"]?></label>
                      <input type="text" name="name" class="form-control" required value="<?=$levelname?>">
                    </div>
                    <div class="form-group">
                        <label for="input1" class="form-label"><?=$lan["modules"]?></label>
                        <input type="text" name="descrip" class="form-control" required value="<?=$levelclasif?>">
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