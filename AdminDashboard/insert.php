<?php 
	include('connect.php');

	extract($_POST);
	if(isset($_POST['nameSend']) && isset($_POST['priceSend']) && isset($_POST['categorySend']) && isset($_POST['detailSend'])){
		$nameSend = $_POST['nameSend'];
		$priceSend = $_POST['priceSend'];
		$categorySend = $_POST['categorySend'];
		$detailSend = $_POST['detailSend'];

		$sql = "INSERT INTO products (product_name,product_price,product_cat,product_details) VALUES ('$nameSend','$priceSend','$categorySend','$detailSend')";
		$query = mysqli_query($con,$sql);
		
	}
 ?>