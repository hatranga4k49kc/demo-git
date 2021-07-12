<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	// tạo kết nối
	
	include 'connect.php';

	// thực hiện truy vấn

	// sử dụng hàm mysql_query()
	$query = mysqli_query($conn,"SELECT * FROM category");

	// var_dump($query);
	
	print_r($_GET);
 ?>



<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<table class="table table-bordered table-inverse table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $key => $value): ?>
						<tr>
							<td>1</td>
							<td><?php echo $value["name"] ?></td>
							<td><?php echo ($value["status"]==1)?'Hiện':'Ẩn' ?></td>
							<td>
								<a href="edit.php?id=<?php echo $value["id"] ?>" class="btn btn-info">Edit</a>
								<a href="delete.php?id=<?php echo $value["id"] ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include 'layout/footer.php' ?>