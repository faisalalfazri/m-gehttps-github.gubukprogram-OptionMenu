<?php
    $newpath="../";
	
    require_once("$newpath/layout/head.php");
	require_once("$newpath/layout/top_bar.php");
	require_once("$newpath/layout/left_navigation.php");


    ?>

  <!-- Modal animation CSS -->
<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 p-0">
                <div class="main-header">
                    <h4>CRUD</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">CRUD</a></li>
                        <li class="breadcrumb-item"><a href="menu-header-fixed.html">Data</a></li>
                    </ol>
                </div>
                <!-- end of main-header -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <div class="card">
            <div class="card-header">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <h5 class="card-header-text">Data CRUD</h5>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 text-right">
                    <button type="button" id="new_data" class="btn btn-inverse-primary btn-mini waves-effect waves-light" data-toggle="modal" data-target="#large-Modal" data-backdrop="static" data-keyboard="false" data-placement="center" title="" data-original-title="Add Data">
                        <i class="icofont icofont-plus "></i><span class="m-l-10">New</span>
                    </button>
                    
                </div>
            </div>
            <div class="card-block menu-snaps">
                <div class="card-block">
            <table id="simpletable" class="table dt-responsive table-striped table-bordered nowrap">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
              </thead>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
              </tfoot>
              <tbody>
                    
              </tbody>
            </table>
          </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <?php include("form.php"); ?>
    </div>
</div>
<?php
require_once("$newpath/layout/footer.php");
?>

<!-- remove these lines if no js control -->
<?php $file_control=basename(dirname(__FILE__)) ?>
<script src="<?=$server;?>/js/control/<?=$file_control;?>.js"></script>