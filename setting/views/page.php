<?php
	require_once("layout/head.php");
	require_once("layout/top_bar.php");
	require_once("layout/left_navigation.php");
?>

<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="row">
          <div class="col-sm-12 p-0">
            <div class="main-header">
              <h4>Data Table
              <?php echo $PAGE_TITLE; ?>
              </h4>
              <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                  <a href="#">
                    <i class="icofont icofont-home"></i>
                  </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item"><a href="data-table.html">Data Table</a></li>
              </ol>
            </div>
          </div>
        </div>
    <!-- main content end -->
    </div> 
</div>
<!-- container end -->

  
<?php
require_once("layout/footer.php");
?>