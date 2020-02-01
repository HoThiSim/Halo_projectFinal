<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="../model/style/icon-font.min.css">
	<link rel="stylesheet" href="../model/style/animate.css">
	<link rel="stylesheet" href="../model/style/hamburgers.min.css">
	<link rel="stylesheet" href="../model/style/animsition.min.css">
	<link rel="stylesheet" href="../model/style/select2.min.css">
	<link rel="stylesheet" href="../model/style/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../model/style/util.css">
	<link rel="stylesheet" type="text/css" href="../model/style/main.css">
</head>

<body style="background-color: red">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../model/image/background/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="" method="post" class="login100-form validate-form flex-sb flex-w" enctype="multipart/form-data">
					<span class="login100-form-title p-b-53">
						Sign Up With
					</span>
					<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>
					<a href="#" class="btn-google m-b-20">
						<img src="../model/image/icon/icon-google.png" alt="GOOGLE">
						Google
					</a>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<h5><b>Avata</b> </h5>
						</span>
						<input type="file" name="imgToUpload" id="imgToUpload">
						<input type="submit" value="Upload Image" name="uploadImg">
						<!-- <img  style="width: 100%" src="../database/UserImg/1/sim.jpg" style="" alt=""> -->
						<?php require '../OOP/function/uploadSignup.php';
						require '../OOP/function/signup.php';
						?>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<h5><b>Gender</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Sgender is required">
						<select name="Sgender" id="input" class="form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					<!-- name -->
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<h5><b>Name</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Sname is required">
						<input class="input100" type="text" name="Sname">
						<span class="focus-input100"></span>
					</div>
					<!-- gender -->

					<!-- Dob -->
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<h5><b>Date of birth</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Sdob is required">
						<input class="input100" type="date" name="Sdob">
						<span class="focus-input100"></span>
					</div>
					<!-- Addres -->
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<h5><b>Address</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Sdob is required">
						<input class="input100" type="text" name="Saddress">
						<span class="focus-input100"></span>
					</div>
					<!-- phone -->
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<h5><b>Phone</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Sphone is required">
						<input class="input100" type="number" name="Sphone">
						<span class="focus-input100"></span>
					</div>
					<!-- user name -->
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<h5><b>User Name</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Susername is required">
						<input class="input100" type="text" name="Susername">
						<span class="focus-input100"></span>
					</div>
					<!-- pass -->
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<h5><b>Password</b> </h5>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Spass is required">
						<input class="input100" type="password" name="Spassword">
						<span class="focus-input100"></span>
					</div>








					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="signup" value="true">
							<h5><b>Sign Up</b> </h5>
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>

</html>