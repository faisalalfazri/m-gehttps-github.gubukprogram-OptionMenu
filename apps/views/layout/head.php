<!DOCTYPE html>
<?php
    session_start();
    $path="../../";
    if(isset($newpath)) $path=$path.$newpath;
    require_once("$path/configs/db.conf");
    require_once("$path/configs/lang/lang.conf");
    $language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
    extract($lang);
?>
<html lang="en">
<head>
    <title><?=$PAGE_TITLE;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="<?=$server ?>/assets/images/favicon-gubuk.png" type="image/x-icon">
    <link rel="icon" href="<?=$server ?>/assets/images/favicon-gubuk.png" type="image/x-icon">
    <!--
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    -->
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/icon/flag-icons/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=$server ?>/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/plugins/sweetalert/css/sweetalert.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/plugins/data-table/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/plugins/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$server;?>/assets/plugins/data-table/css/responsive.bootstrap4.min.css">  
</head>