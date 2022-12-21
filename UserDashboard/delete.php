<?php 
	include('connect.php');
	
	if(isset($_POST['deletesend'])){
		$unique = $_POST['deletesend'];

		$sql = "DELETE FROM products WHERE product_id = '$unique'";
		$query = mysqli_query($con,$sql);
	}
?>