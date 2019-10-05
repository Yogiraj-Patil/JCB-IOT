<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link rel="icon" type="image/png" href='<?= base_url("Assets/login/images/icons/favicon.ico")?>'/>
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/bootstrap/css/bootstrap.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/animate/animate.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/css-hamburgers/hamburgers.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/animsition/css/animsition.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/select2/select2.min.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/vendor/daterangepicker/daterangepicker.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/css/util.css')?>">
			<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/login/css/main.css')?>">
	</head>
	<body>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
				<?= form_open('login/check','class="login100-form validate-form"')?>
					  <!-- <form class="login100-form validate-form"> -->
						<span class="login100-form-title p-b-34">
							Account Login
						</span>
					
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
							<!--  <input id="first-name" class="input100" type="text" name="username" placeholder="User name">-->
							<?= form_input(['class'=>'input100', 'name'=>'username','placeholder'=>'User Name', 'type'=>'text', 'id'=>'first-name','required'=>'required', 'value'=>set_value('username')
							]);?>
							<?php echo form_error('username','<div class="error">','</div>')?>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
							<!-- <input class="input100" type="password" name="pass" placeholder="Password">  -->
							<?php echo form_password(['class'=>'input100', 'type'=>'password', 'name'=>'pass', 
							    'placeholder'=>'Password', 'required'=>'required'
							])?>
							 <span class="focus-input100"></span>    
							<?php echo form_error('pass','<div class="error" style="color:#8b0000;">','</div>')?>
						</div>
					
						<div class="container-login100-form-btn">
						<?php echo form_button(['class'=>'login100-form-btn', 'name'=>'submit','type'=>'submit'],"Sign in")?>
							<!--  <button class="login100-form-btn">
								Sign in
							</button>   -->
						</div>

						<div class="w-full text-center p-t-27 p-b-239">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								User name / password?
							</a>
						</div>

						<div class="w-full text-center">
							<a href="#" class="txt3">
								Sign Up
							</a>
						</div>
					</form>

					<div class="login100-more" style="background-image: url('<?= base_url('Assets/login/images/image.jpg')?>');"></div>
				</div>
			</div>
		</div>
	
	

		<div id="dropDownSelect1"></div>
		
		<script src="<?= base_url('Assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
		<script src="<?= base_url('Assets/login/vendor/animsition/js/animsition.min.js')?>"></script>
		<script src="<?= base_url('Assets/login/vendor/bootstrap/js/popper.js')?>"></script>
		<script src="<?= base_url('Assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
		<script src="<?= base_url('Assets/login/vendor/select2/select2.min.js')?>"></script>
		<script>
			$(".selection-2").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});
		</script>
		<script src="<?= base_url('vendor/daterangepicker/moment.min.js')?>"></script>
		<script src="<?= base_url('vendor/daterangepicker/daterangepicker.js') ?>"></script>
		<script src="<?= base_url('vendor/countdowntime/countdowntime.js')?>"></script>
		<script src="<?= base_url('js/main.js')?>"></script>
	</body>
</html>