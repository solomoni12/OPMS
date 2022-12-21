<?php 
	include('connect.php');

	if(isset($_POST['updateid'])){
		$userid = $_POST['updateid'];

		$sql = "SELECT * FROM products WHERE product_id='$userid'";
		$query = mysqli_query($con,$sql);
		$response = array();
		while($row = mysqli_fetch_assoc($query)){
			$response = $row;
		}
		echo json_encode($response);
	}else{
		$response['status']=200;
		$response['message']='invalid or data not found';
	}

	// update query
	if(isset($_POST['hiddendata'])){
		$uniqueid = $_POST['hiddendata'];
		$name = $_POST['updatename'];
		$price = $_POST['updateprice'];
		$category = $_POST['updatecategory'];
		$detail = $_POST['updatedetail'];

		$sql = "UPDATE products SET product_name='$name',product_price='$price',product_cat='$category',product_details='$detail' WHERE product_id='$uniqueid'";
		$query = mysqli_query($con,$sql);
	}
?>