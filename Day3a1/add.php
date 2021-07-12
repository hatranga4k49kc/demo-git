<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	include 'connect.php';
	// các bước thực hiện thêm mới
	
	// bước 1 lấy dữ liệu từ form 

	if(isset($_POST["name"])){
		// lấy giá trị
		$name = $_POST["name"];
		$status = $_POST["status"];
		// bước 2 truuy vấn dữ liệu

		$sql = "INSERT INTO category(name,status) VALUES('$name','$status')";
		// bước 3 thực hiện query dũ liệu thông qua hàm mysqli_query()
		$query = mysqli_query($conn,$sql);

		if($query){
			echo "Them moi thanh cong";
		}else{
			echo "Them moi that bai";
		}
	}


 ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<form action="" method="POST">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Category Name</label>
							    <input type="text" class="form-control" name="name">
							    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Status</label>
							   	<label class="radio-inline">
							   		<input type="radio" name="status" id="inlineRadio1" value="1" checked> Hiện
							   	</label>
							   	<label class="radio-inline">
							   		<input type="radio" name="status" id="inlineRadio1" value="0"> Ẩn
							   	</label>
							   	
							  </div>
							 
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
<?php include 'layout/footer.php' ?>