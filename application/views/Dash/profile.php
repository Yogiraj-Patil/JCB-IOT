<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('header.php')?>
<!-- this is for side bar -->
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
						<li class="treeview">
							<a href="#">
								<i class="fa fa-dashboard"></i><span>Dashboard</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li ><a href="<?= base_url('Welcome/')?>"><i class=""></i>Home</a></li>
								<li ><a href="<?= base_url('Welcome/data')?>"><i class=""></i>Data</a></li>
							</ul>
						</li>
						<li class="active treeview">
							<a href="#">
								<i class="fa fa-files-o"></i>
								<span>Options</span>
								<span class="pull-right-container">
									<span class="label label-primary pull-right">1</span>
								</span>
								</a>
								<ul class="treeview-menu">
									<li class="active"><a href=""><i calss="fa fa-circle-o"></i>Profile</a></li>
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

<!-- side bar ends -->

<div class="content-wrapper">
				<section class="content-header">
					<h1>Profile
						<small>JCB Portal</small>	
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i>Profile</a></li>
						<li class="active">Options</li>
					</ol>
				</section>

				<section class="content">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">User Profile</h3>
								</div>
								<form role="form">
									<div class="box-body">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
                  									<input type="email" class="form-control" id="exampleInputEmail1" value="<?= $session_datas['us_email'];?>" disabled>											
												</div>

												<div class="form-group">
													<label for="">Address</label>
                  									<input type="text" class="form-control" id="" value="<?= $session_datas['us_addre'];?>" disabled>											
												</div>


												<div class="form-group">
													<label for="">Registration Date</label>
                  									<input type="text" class="form-control" id="" value="<?= $session_datas['us_dte_jin'];?>" disabled>											
												</div>

											</div>
											<div class="col-md-1">
											</div>
											<!------------------------------------------------------------------------------------------------------>
											<div class="col-md-5">
												<div class="form-group">
													<label >User Name</label>
                  									<input type="text" class="form-control"  value="<?= $session_datas['us_name'];?>" disabled >											
												</div>

												<div class="form-group">
													<label for="">Mobile</label>
                  									<input type="text" class="form-control" id="" value="+91<?= $session_datas['us_mobile'];?>" disabled>											
												</div>

												<div class="form-group">
													<label for="">Registration Time</label>
                  									<input type="text" class="form-control" id="" value="<?= $session_datas['us_tme_jin'];?>" disabled>											
												</div>
											</div>
										</div>
										
									</div>

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>

								</form>
							</div>
						</div>
					</div>
				</section>


</div>




<?php include('footer.php') ?>