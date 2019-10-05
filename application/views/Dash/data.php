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
								<li ><a href="<?= base_url('Welcome/')?>"><i class=""></i>Home</a></li>
								<li class="active"><a href="#"><i class=""></i>Data</a></li>
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
		<h1>Vehical Data
			<small>JCB Portal</small>	
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Data</a></li>
			<li class="active">Options</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Vehical Data</h3>
					</div>
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>

									<th>Vehical Number</th>
									<th>Vehical Name</th>
									<th>Status</th>
									<th>Fuel</th>
									<th>Location Coordinates</th>
									<th>Date Time</th>
							</thead>

							<tbody>
								<tr>
									<td>MH12 AB1234</td>
									<td>JCB Pocland</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>20.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
								<tr>
									<td>MH12 AB1234</td>
									<td>MCB Motor</td>
									<td>ON</td>
									<td>30%</td>
									<td>19.65874,79.258741</td>
									<td>25/09/2019</td>
								</tr>
							</tbody>

							<tfoot>
								<tr>
									<th>Vehical Number</th>
									<th>Vehical Name</th>
									<th>Status</th>
									<th>Fuel</th>
									<th>Location Coordinates</th>
									<th>Date Time</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>	
		</div>
	</section>
</div>



<?php include('footer.php') ?>