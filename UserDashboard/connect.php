<?php 

	$con = new mysqli('localhost','root','','opms_db');
	if (!$con) {
		die(mysqli_error($con));
	}
	
 ?>