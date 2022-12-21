<?php 
	include('../AdminDashboard/connect.php');  
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$query = mysqli_query($con,$sql);
		$result = mysqli_fetch_array($query);
		$rows = mysqli_num_rows($query);
		if($rows > 0){
			header('location:../AdminDashboard/index.php');
		}
	}
?>

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
				<h3 class="text-center pt-3">
				Opms Login</h3>
				<!-- <p class="text-center text-muted lead">its free and take minutes</p> -->
				<!-- form start -->
				<form action="#" method="POST" class="py-3">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
						<input type="text" name="username" class="form-control" placeholder="username">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="d-grid">
						<button type="submit" name="login" class="btn btn-success">Login Now</button>
						<!-- <p class="text-center text-muted mt-2">
							When you Register by clicking Signup Button, You agree to our <a href="#">Terms and conditions</a> and <a href="#">Privacy policy</a>
						</p> -->
						<p class="text-center mt-3">
							Don't Have An Account? <a href="index.php">signup Here</a>
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