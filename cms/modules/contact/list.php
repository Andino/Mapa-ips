<?php
$msg = "";
$levelname="";
$modetype = "add";
$levelfunda="";
$levelfundana="";
$levelprog="";
$levelprogna="";
if(isset($_POST['submit-form'])) {
        $levelmodules = json_encode($levelmodules);
        $data = array( 
            "nombre_contactoorg" => "'$name'",
            "id_fundaorg" => "'$funda'",
            
        );
        if ($mode == "add") {
            $db->insert($data, "contactoorg_ips");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["add_success"]."</div>";
        }
        if ($mode == "update") {
            $db->update($data, "contactoorg_ips", "id_contactoorg = $levelid");
            $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["update_success"]."</div>";
        }
}
if(isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    $levelid = $_GET['id'];

  if($mode=="delete"){
    $db->delete("contactoorg_ips", "id_contactoorg = $levelid");
      $msg = "<div class='kode-alert kode-alert-icon alert3'><i class='fa fa-check'></i><a href='#' class='closed'>×</a>".$lan["delete_success"]."</div>";
  }
  if($mode=="updateform"){
    //get the info
        $modetype = "update";
        $datarow = $db->select("contactoorg_ips as co 
           inner join fundaorg_ips as f on f.id_fundaorg = co.id_fundaorg
           inner join programa_ips as p on p.id_contacto = co.id_contactoorg","id_contactoorg = $levelid");
        $levelname = $datarow[0]['nombre_contactoorg'];
        $levelfunda = $datarow[0]['id_fundaorg'];
        $levelfundana = $datarow[0]['nombre_fundaorg'];
        $levelprog = $datarow[0]['id_prog'];
        $levelprogna = $datarow[0]['nombre_prog'];
  }
}
?>
<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$lan["contact_title"]?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["users"]?></a></li>
        <li class="active"><?=$lan["contact_title"]?></li>
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
                        <th></th>
                        
                    </tr>
                </thead>
             
                <tbody>
                   <?php
                        
                        $list_contact = $db->select("contactoorg_ips","id_contactoorg > 0 ORDER BY id_contactoorg ASC");
                        foreach ($list_contact as $key => $value) {


                            if (!empty($list_contact[$key]["google_picture"])) {
                                $avatar = $list_contact[$key]["google_picture"]; 
                            }elseif (!empty($list_contact[$key]["facebook_picture"])) {
                                $avatar = $list_contact[$key]["facebook_picture"];
                            }else{
                                $avatar = BASE_URL."/img/avatar_default.jpg";
                            }
                            
                            $id = $list_contact[$key]["id_contactoorg"];
                        echo "
                            <tr>
                                <td>".$list_contact[$key]["nombre_contactoorg"]."</td>
                                <td></td>
                                <td></td>
                                <td></td>";
                                
                        echo "  <td>
                                <center>
                                    <div class='btn-group' role='group' aria-label='...'>
                                        <a href='".BASE_URL."/m/contact/list&mode=updateform&id=$id' class='btn btn-light btn-xs'><i class='fas fa-edit'></i></a>";
                        if (in_array("Delete", $modulesthislevel)) {      
                            echo "<a href='".BASE_URL."/m/contact/list&mode=delete&id=$id' class='btn btn-light btn-xs'><i class='fas fa-minus-circle'></i></a>";
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
                  <form method="POST" action="<?=BASE_URL?>/m/contact/list">
                    <div class="form-group">
                      <label for="input1" class="form-label"><?=$lan["name"]?></label>
                      <input type="text" name="name" class="form-control" required value="<?=$levelname?>">
                    </div>
                    <div class="form-group">
                    <select style="width: 285px!important" name="funda">
                    <option value='<?=$levelfunda?>'><?=$levelfundana?></option>
                        <?php 
                            $list_contacts = $db->onlySelect("fundaorg_ips"); 
                            foreach ($list_contacts as $key => $value) {
                                echo "<option value='".$list_contacts[$key]["id_fundaorg"]."'>".$list_contacts[$key]["nombre_fundaorg"]."</option>"; 
                            } 
                        ?> 
                    </select> 
                  </div>

                    <div class="form-group">
                    <select style="width: 285px!important" name="prog">
                    <option value='<?=$levelprog?>'><?=$levelprogna?></option>
                        <?php 
                            $list_contacts = $db->onlySelect("programa_ips as p inner join contactoorg_ips as co on co.id_contactoorg = p.id_contacto "); 
                            foreach ($list_contacts as $key => $value) {
                                echo "<option value='".$list_contacts[$key]["id_prog"]."'>".$list_contacts[$key]["nombre_prog"]."</option>"; 
                            } 
                        ?> 
                    </select> 
                  </div>
                    <br><br><br>
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