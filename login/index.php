<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>signup and login form</title>
</head>
<body class="bg-light">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-4 bg-white m-auto rounded-top wrapper">
				<h3 class="text-center pt-3">Opms SignUp</h3>
				<!-- <p class="text-center text-muted lead">its free and take minutes</p> -->
				<!-- form start -->
				<form action="register.php" method="POST">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
						<input type="text" name="username" class="form-control" placeholder="username">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-phone"></i></span>
						<input type="number" name="phoneNumber" class="form-control" placeholder="Pnone number">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						<input type="email" name="email" class="form-control" placeholder="email">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<!-- <div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
						<input type="password" name="Cpassword" class="form-control" placeholder="Confirm-password">
					</div> -->
					<div class="d-grid">
						<button type="submit" name="signup" class="btn btn-success">Signup Now</button>
						<!-- <p class="text-center text-muted mt-2">
							When you Register by clicking Signup Button, You agree to our <a href="#">Terms and conditions</a> and <a href="#">Privacy policy</a>
						</p> -->
						<p class="text-center">
							Already You Have An Account <a href="login.php">Login Here</a>
						</p>

					</div>
				</form>
				<!-- form close -->
			</div>
		</div>
	</div>
	<!-- <i class="fa fa-user"></i>
	<script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>