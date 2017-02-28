<!DOCTYPE html>
<?php 
	session_start();
    $path="../";
    require_once("$path/configs/db.conf");
    require_once("$path/configs/lang/lang.conf");
    $language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
    extract($lang);
?>
<html lang="en">
<head>
	<title>Forget</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="GubukProgram">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="GubukProgram.com">
	<link rel="shortcut icon" href="<?=$server;?>/assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?=$server;?>/assets/images/favicon.png" type="image/x-icon">
	<link href="<?=$server;?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/icon/icofont/css/icofont.css">
	<link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/plugins/waves/css/waves.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/css/responsive.css">

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">
			<?php include_once("link_select_language.php"); ?>
			</div>
			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" name="login" id="login" method="post" enctype="multipart/form-data">
						<div class="text-center txt-primary">
							
						</div>
						<h3 class="text-center txt-primary">
							<?=$LABEL_SAY_FORGOT;?>
						</h3>
						<div class="md-input-wrapper">
							<input type="email" name="email" class="md-form-control" required=""/>
							<label><?=$LABEL_EMAIL;?></label>
						</div>
						
						<div class="row">
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								
							</div>
								</div>
							
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1 ">
								<button type="submit" id="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"><?=$LABEL_SEND;?></button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						<div class="col-sm-5 col-xs-12 forgot-phone text-left">
							<a href="login" class="f-w-600 p-l-5"><?=$LABEL_SIGN_IN;?></a>
						</div>
						<div class="col-sm-7 col-xs-12 text-right">
							<span class="text-muted"><?=$LABEL_HAVING_CODE;?></span>
							<a href="reset_code" class="f-w-600 p-l-5"><?=$LABEL_CLICK_HERE;?></a>
						</div>
						

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="assets/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="assets/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="assets/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="assets/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="assets/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="<?=$server;?>/assets/js/jquery-3.1.1.min.js"></script>
<!-- self_custom -->
<script src="<?=$server;?>/assets/self_custom.js"></script>
<script src="<?=$server;?>/assets/js/jquery-ui.min.js"></script>
<script src="<?=$server;?>/assets/js/tether.min.js"></script>
<script src="<?=$server;?>/assets/js/bootstrap.min.js"></script>
<!-- notification required -->
<script src="<?=$server; ?>/assets/plugins/notification/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="<?=$server;?>/assets/pages/elements.js"></script>

<script type="text/javascript" src="authentication.js"></script>

</body>
</html>