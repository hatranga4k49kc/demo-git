<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	include 'connect.php';
	
	// bước 1 lấy id từ url
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		// bước 2 thực hiện truy vấn lấy về bản ghi category theo id của nó

		$query = mysqli_query($conn,"SELECT * FROM category WHERE id = '$id'");

		// bước 3 hiển thị thông tin lấy được
			// hàm chuyển object => array 
			$category = mysqli_fetch_assoc($query);

		// var_dump($query);
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$status = $_POST['status'];

		// bước thực xây dựng caai tuy vấn
		$sql = "UPDATE category SET name='$name',status='$status' WHERE id = $id";

		// thục hiện quey 

		$query = mysqli_query($conn,$sql);
		if($query){
			header('Location: index.php');
		}
		else{
			echo "cập nhật thất bại";
		}
	}


 ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<form action="" method="POST">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Category Name</label>
							    <input type="text" class="form-control" name="name" value="<?= $category['name']?>">
							    
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Status</label>
							   	<label class="radio-inline">
							   		<input type="radio" name="status" id="inlineRadio1" value="1" <?php echo ($category["status"] == 1)?'checked':'' ?>> Hiện
							   	</label>
							   	<label class="radio-inline">
							   		<input type="radio" name="status" id="inlineRadio1" value="0" <?php echo ($category["status"] == 0)?'checked':'' ?>> Ẩn
							   	</label>
							   	
							  </div>
							 
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
<?php include 'layout/footer.php' ?>