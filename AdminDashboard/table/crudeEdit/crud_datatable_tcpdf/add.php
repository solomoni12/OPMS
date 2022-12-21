<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$username = $_POST['username'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$sql = "INSERT INTO user (username, mobile, email, city) VALUES ('$username', '$mobile', '$email', '$city')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>