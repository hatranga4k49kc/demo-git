<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	include 'connect.php';

	// bước 1 lấy danh sách danh mục hiển thị vào selelect option 
		// query dữ liệu
		$category = mysqli_query($conn,"SELECT * FROM category");
		
	// Bước 2 lấy dữ liệu từ form 
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$category_id = $_POST['category_id'];

			
			// upload file
			if($_FILES['image']['name'] != ''){
				$file = $_FILES['image'];
				$file_name = time().$file['name'];
				move_uploaded_file($file['tmp_name'], 'uplodas/'.$file_name);
			}
			// bước 3 xây dựng câu truy vân để thêm mới
			$sql = "INSERT INTO product(name,price,image,category_id) VALUES('$name','$price','$file_name','$category_id')";
			// bước 4 thực query sử dụng hàm mysqli_query 
			$query = mysqli_query($conn,$sql);

			if($query){
				echo "Thêm mới thành công";
			}else{
				echo "Thêm mới thất bại";
			}
		}

 ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<form action="" method="POST" enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Name</label>
							    <input type="text" class="form-control" name="name">

							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Price</label>
							    <input type="text" class="form-control" name="price">

							  </div>

							   <div class="form-group">
							    <label for="exampleInputEmail1">Image</label>
							    <input type="file" class="form-control" name="image">

							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Chose Category</label>
							   <select name="category_id" id="input" class="form-control" required="required">
							   	<?php foreach ($category as $key => $value): ?>
							   		<option value="<?php echo $value['id']?>"><?php echo $value['name'] ?></option>
							   	<?php endforeach ?>
							   
							   
							   </select>

							  </div>
							  
							  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
<?php include 'layout/footer.php' ?>