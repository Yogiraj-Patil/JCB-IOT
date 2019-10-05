<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<title>IOT JCB</title>

		<link rel="icon" type="image/png" href='<?= base_url("Assets/login/images/icons/favicon.ico")?>'/>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/font-awesome/css/font-awesome.min.css') ?>">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/Ionicons/css/ionicons.min.css') ?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/dist/css/AdminLTE.min.css'); ?>">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
				 folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/dist/css/skins/_all-skins.min.css'); ?>">
		<!-- Morris chart -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/morris.js/morris.css'); ?>">
		<!-- jvectormap -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/jvectormap/jquery-jvectormap.css') ?>">
		<!-- Date Picker -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="<?=base_url('Assets/dashdata/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Google Font -->
		<link rel="stylesheet" href="<?= base_url('Assets/dashdata/fonts.css'); ?>">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header" id="">
				<!-- Company LoGO -->
				<a href="#" class="logo">
					<span class="logo-mini"><b>J</b>CB</span>
					<span class="logo-lg"><b>JCB</b>Online</span>
				</a>

				<nav class="navbar navbar-static-top">
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle Navigation</span>
					</a>

					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!--<li class="dropdown messages-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success">10</span>
								</a>	
							</li>  -->
							<li class="dropdown user user-menu">
								<a href="#vt" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?= base_url('Assets/UserImage/').$session_datas['us_img_url']; ?>" class="user-image" alt="User Image" >
									<span class="hidden-xs"><?= $session_datas['us_name'];?></span>
								</a>
								<!-- this is sign out menu  from ul--> 
								<?php include('sign_out_box.php'); ?>
								<!-- Sign out menu Complete -->
							</li>
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
								<!-- this is sign out menu  from ul--> 
								<?php include('sign_out_box.php'); ?>
								<!-- Sign out menu Complete -->
							</li>
						</ul>
					</div>
				</nav>

			</header>
			

			




		
