<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	include 'connect.php';
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];

		$product = mysqli($conn, 'SELECT * FROM product WHERE id=$id');
		$product = mysqli_fetch_assoc($product);
		var_dump($product);
	}
	$category = mysqli_query($conn, 'SELECT * FROM category');

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$category_id = $_POST['category_id'];

		var_dump($_FILE['image']);

		if($_FILE['image']['name'] != ''){
			$file= $FILE['image'];
			$file_name = time().$file['name'];
			move_uploaded_file($file['tmp_name'], 'uplodas/.file_name');

		}
		else{
			$file_name = $product['image'];
		}
	}

	$sql = "UPDATE product SET name = '$name', price = '$price', category_id = '$category_id' WHERE id = $id'";

	$query = mysqli_query($conn, $sql);
	if($query){
		header('Location: list-product.php');

	}else{
		echo "loi";
	}

 ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<form action="" method="POST" enctype='multipart/form-data'>
							  <div class="form-group">
							    <label for="exampleInputEmail1"> Name</label>
							    <input type="text" class="form-control" name="name" value="<?= $category['name']?>">
							    
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">price</label>
							   
							   	<input type="text" name="price" value=" <?php echo $procduct["price"]?>"> 
							  
							   
							   	
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">image</label>
							   
							   	<input type="file" name="price" value=" <?php echo $procduct["price"]?>"> 
							  <img src="uplodas/<?php echo $file_name ?>">
							   
							   	
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">price</label>
							   
							   	<input type="radio" name="price" value=" <?php echo $procduct["price"]?>"> 
							  
							   
							   	
							  </div>


							 
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
<?php include 'layout/footer.php' ?>