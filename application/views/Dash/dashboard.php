<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('header.php')?>
<!-- /////////////////////////////////////////////////////-->
<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image" style="margin-bottom: 10%;">
							<img class="img-circle" alt="User Image" src="<?= base_url('Assets/UserImage/').$session_datas['us_img_url']; ?>" >
						</div>
						<div class="pull-left info" style="margin-bottom: 5%;">
							<p><?= $session_datas['us_name']; ?></p>
							<a href="#"><i class="fa fa-circle text-success"></i>Since. <?= date("M , Y",strtotime($session_datas['us_dte_jin'])); ?></a>
						</div>
					</div>

					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">Navigations</li>
						<li class="active treeview">
							<a href="#">
								<i class="fa fa-dashboard"></i><span>Dashboard</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="active"><a href="#"><i class=""></i>Home</a></li>
								<li ><a href="<?= base_url('Welcome/data')?>"><i class=""></i>Data</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-files-o"></i>
								<span>Options</span>
								<span class="pull-right-container">
									<span class="label label-primary pull-right">1</span>
								</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="<?= base_url('Welcome/profile')?>"><i calss="fa fa-circle-o"></i>Profile</a></li>
								</ul>
						</li>

						<li >
						<a href="">
							<i class="fa fa-th"></i><span>More</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green">1</small>
							</span>
						</a>
						</li>
					</ul>
				</section>
</aside>
<!-- /////////////////////////////////////////////////////-->





<div class="content-wrapper">
				<section class="content-header">
					<h1>Dashboard
						<small>JCB Portal</small>	
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
						<li class="active">Dashboard</li>
					</ol>
				</section>

				<section class="content">
					<div class="row" >
						<div class="col-lg-6 col-xs-6" style="padding-left:3%; padding-right: 3%;" >
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3 style="margin-left:5%;">15%</h3>
									<p style="margin-left:5%;">Fuel</p>
								</div>
								<div class="icon">
									<i class="ion ion-playstation"></i>
								</div>
								<a href="" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-6 col-xs-6" style="padding-left: 3%;padding-right: 3%;">
							<div class="small-box bg-green">
								<div class="inner">
									<h3 style="margin-left:5%;">12%</h3>
									<p style="margin-left:5%;">Oil</p>
								</div>
								<div class="icon">
									<i class="ion ion-ios-speedometer-outline"></i>
								</div>
								<a href="" class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="row" ><?php include('speed.php'); ?>
						<div class="col-lg-6 col-xs-12" >
							<div class="box box-success">
								<div class="box-header with-border text-center">
									<h3 class="box-title ">Fuel Remain (%)</h3>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body" style="max-width: 100%; background-color: #444444;">
									
									<div id="some_element"  class="text-center">
										<a href="#">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xs-12">
							<div class="box box-primary">
								<div class="box-header with-border text-center">
									<h3 class="box-title">Oil Remain (%)</h3>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body" style="max-width: 100%; background-color: #444444;">
									
									<div id="some_elementx" class="text-center" >
										<a href="#">
											<div class="mask rgba-white-slight"></div>
										</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>

					<div class="row" >
						<div class="col-lg-6 col-xs-6">

							<div id="gmap" style="width:100%; height:100%; background-color:grey;"></div>
							
						</div>
					</div>
				</section>


</div>

<?php include('footer.php') ?>