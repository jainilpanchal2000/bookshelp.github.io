<?php
	session_start();
    $email = $_POST['email'];
    setcookie("mail", $email);
?>

<html lang="en">
<head>
	<title>BooksHelp/Reset Passwd</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/Icons/reset.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="CSS/Login/css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/Login/fonts/iconic/css/material-design-iconic-font.min.css">
	

<style>
	.field-icon {
	float: right;
	margin-left: -10px;
	margin-right: 10px;
	margin-top: -33px;
	position: relative;
	z-index: 2;
	}
</style>

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt m-b-100" data-tilt>
					<img src="CSS/Login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form m-t-40" method="POST" action="resetpass.php">
					<span class="login100-form-title">
						Verify Email
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter valid otp">
						<input class="input100" type="text" name="otp" placeholder="Enter OTP" id="otp">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn m-b-30">
						<button class="login100-form-btn" onclick="show()">
							Verify
						</button>
					</div> 

					<?php
					    $random = rand(1000,9999);
					    $command = "python C:"."\\"."xa"."mpp\htdocs\Web"." "."Project\login\Python\Reset.py ".$email." ".$random;
					    system($command);
					?>
					<h6 class="m-l-80" id="wait"> Wait for a minute </h6><br>

					<div id="verify" style="display: none;">
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="passwd" placeholder="Password" id="password-field">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password m-l-220"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="cpasswd" placeholder="Confirm Password" id="password-field">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password m-l-220"></span>
					</div>

					<div class="container-login100-form-btn m-b-100">
						<button class="login100-form-btn">
							Reset
						</button>
					</div> 
					</div>             

				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="CSS/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="CSS/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="CSS/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="CSS/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="CSS/Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="CSS/Login/js/main.js"></script>

<!--===============================================================================================-->
	<script>		
		$(".toggle-password").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
		input.attr("type", "text");
		} else {
		input.attr("type", "password");
		}
		});

		function show(){
			var code1 = document.getElementById('otp').value;
			var code2 = "<?php echo $random ?>";
			if (code1 == code2) {
				document.getElementById('verify').style.display = "block";
				document.getElementById('wait').style.display = "none";
			}else{
				window.alert("Wrong Pin");
			}
		}
	</script>

</body>
</html>