<?php 
	include 'connect.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$product = mysqli_query($conn, "SELECT * FROM product WHERE id = '$id'");
		$pro = mysqli_fetch_assoc($product);
		$query = mysqli_query($conn, "DELETE FROM product WHERE id = '$id'");
		if($query) {
			unlink('uplodas/'.$pro['image']); // xoa luon anh trong uplodas
			header('Location: list-product.php');
		}else{
			echo 'khong thanh cong';
		}
	}

 ?>