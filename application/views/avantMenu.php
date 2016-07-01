<!DOCTYPE html>
<html>

<head>

<title>Cinez-moi</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?php echo css_url("bootstrap.min");?>" rel='stylesheet' type='text/css' />
<link href="<?php echo css_url("style");?>" rel='stylesheet' type='text/css' />
<link href="<?php echo css_url("font-awesome");?>" rel="stylesheet"> 
<link href="<?php echo css_url("icon-font.min");?>" rel="stylesheet" type='text/css' />
<link href="<?php echo css_url("popuo-box");?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo js_url("jquery-1.10.2.min");?>"></script> 
<script src="<?php echo js_url("angular.min");?>"></script> 

</head> 
   
<body class="sticky-header left-side-collapsed">
<div ng-app="myApp" ng-controller="myCtrl">
    <section>
		<!-- left side start-->
		<div class="left-side sticky-left-side">
			<div class="logo">
				<h1><a href="<?php echo pageVisiteur_url("index");?>">Cinez<span>-moi </span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo pageVisiteur_url("index");?>">CM </a>
			</div>