<!DOCTYPE html>
<html lang="en">
<head>
	<title>Selamat Datang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url().'/assets/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/login/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
					<span class="login100-form-title p-b-26">
						Masuk Ke Akun Anda
					</span>
					<?php echo $this->session->flashdata('msg');?>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Id Pengguna"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Kata Sandi"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Masuk
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo base_url().'/assets/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo base_url().'/assets/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'/assets/login/js/main.js'?>"></script>

</body>
</html>