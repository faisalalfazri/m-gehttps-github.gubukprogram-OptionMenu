<!DOCTYPE html>
<?php
    session_start();
    $path="../../";
    require_once("$path/configs/db.conf");
    require_once("$path/configs/lang/lang.conf");
    $language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
    extract($lang);
    
?>
<html lang="en">
<head>
    <title><?=$PAGE_TITLE;?></title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo $server; ?>/assets/images/favicon-gubuk.png" type="image/x-icon">
    <link rel="icon" href="<?php echo $server; ?>/assets/images/favicon-gubuk.png" type="image/x-icon">
    <!--
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    -->
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/icon/flag-icons/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $server; ?>/assets/plugins/charts/chartlist/css/chartlist.css" type="text/css" media="all">
    <link href="<?php echo $server; ?>/assets/css/svg-weather.css" rel="stylesheet">
    <script src="<?php echo $server; ?>/assets/plugins/charts/echarts/js/echarts-all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $server; ?>/assets/css/color/color-1.css" id="color"/>
    
</head>