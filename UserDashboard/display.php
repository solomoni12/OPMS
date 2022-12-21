<?php 
	include('connect.php');

	if(isset($_POST['displaySend'])){
		$table = '
		<table class="table">
 		 <thead class="thead-dark">
   			 <tr>
			      <th scope="col">S/NO</th>
			      <th scope="col">Product name</th>
			      <th scope="col">Product price</th>
			      <th scope="col">Product category</th>
			      <th scope="col">Product detail</th>
			      <th scope="col">Action</th>
			  </tr>
  			</thead>';
  			$sql = "SELECT * FROM products";
  			$query = mysqli_query($con,$sql);
  			$number = 1;
  			while($row = mysqli_fetch_assoc($query)){
  				$id = $row['product_id'];
  				$name = $row['product_name'];
  				$price = $row['product_price'];
  				$category = $row['product_cat'];
  				$detail = $row['product_details'];
  				$table.=' 
  				<tr>
			      <th scope="row">'.$number.'</th>
			      <td>'.$name.'</td>
			      <td>'.$price.'</td>
			      <td>'.$category.'</td>
			      <td>'.$detail.'</td>
			      <td>
						<a href="#updateModel" class="edit" data-toggle="modal" onclick="getDetail('.$id.')"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
				  </td>
			    </tr>';
			    $number++;
  			}
  			$table.='</table>';
  			echo $table;
	}
?>
