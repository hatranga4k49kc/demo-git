<?php 
	include 'connect.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		// thực hiện truy vấn 
		$query = mysqli_query($conn,"DELETE FROM category WHERE id = '$id'");
		if($query){
			header('Location: index.php');
		}else{
			echo "ko thanh cong";
		}
	}

 ?>