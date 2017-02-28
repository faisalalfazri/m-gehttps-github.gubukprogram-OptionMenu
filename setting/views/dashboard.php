<?php
	require_once("layout/head.php");
	require_once("layout/top_bar.php");
	require_once("layout/left_navigation.php");
	
?>

<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 p-0">
                <div class="main-header">
                    <h4>Dashboard</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Page Layout</a></li>
                        <li class="breadcrumb-item"><a href="menu-header-fixed.html">Menu Header Fixed</a></li>
                    </ol>
                </div>
                <!-- end of main-header -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <div class="card">
            <div class="card-header"><h5 class="card-header-text">Page layouts</h5></div>
            <div class="card-block menu-snaps">
                <div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12">
	                	put content here
	                	<?php
	                		print_r($_SESSION);

	                	?>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<?php
require_once("layout/footer.php");
?>