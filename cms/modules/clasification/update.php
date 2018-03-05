<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $datarow = $db->select("clasificacion_ips","id_clasif = $id");
    $name = $datarow[0]['nombre_clasif'];
    $descrip = $datarow[0]['descripcion_clasif'];
}

?>

<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title"><?=$name?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=BASE_URL?>/m/users/list"><?=$lan["users_title"]?></a></li>
        <li class="active"><?=$name?></li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="<?=BASE_URL?>/m/users/list" class="btn btn-light"><?=$lan["cancel"]?></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

<!-- START CONTAINER -->
<div class="container-padding margin-b-50">
    <div class="row">
<div class="col-md-12 padding-0">
      <div class="panel panel-transparent">
            <div class="panel-body">
              
                <div role="tabpanel">

                  <!-- Tab panes -->
                  <form action="<?=BASE_URL?>/m/clasification/list" method="POST">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="input1" class="form-label"><?=$lan["name"]?></label>
                            <input type="text" class="form-control" name="name" value="<?=$name?>" required>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="input1" class="form-label"><?=$lan["descrip"]?></label>
                            <input type="text" class="form-control" name="descrip" value="<?=$descrip?>" required>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </div> 
                </div>              

            </div>
            <div class="panel-footer">
                <input type="hidden" name="account_id" value="<?=$id?>">
              <button type="submit" name="submit-form" class="btn btn-default"><?=$lan["save"]?></button>
              </form>
            </div>

      </div>
    </div>
    </div>

</div>
<!-- END CONTAINER -->