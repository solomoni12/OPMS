<?php 
	include('../AdminDashboard/connect.php'); 
	
	if(isset($_POST['signup'])){
		$username=$_POST['username'];
		$phoneNumber=$_POST['phoneNumber'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password=md5($password);
		// $cpassword=$_POST['Cpassword'];

		$sql = "INSERT INTO user (username,phone_number,email,password)
				 VALUES ('$username','$phoneNumber','$email','$password')";
		$query = mysqli_query($con,$sql);
		if(!$query){
			echo mysqli_connect_error($con);
		}else{
			header('location:index.php');
		}
	}
?>