<?php include 'layout/header.php' ?>
<?php include 'layout/menu.php' ?>
<?php 
	// tạo kết nối
	
	include 'connect.php';

	// lấy ra danh sách
	$product = mysqli_query($conn,"SELECT product.*,category.name as 'category_name' FROM product JOIN category ON product.category_id = category.id");

 ?>



<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<table class="table table-bordered table-inverse table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Category Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($product as $key => $value): ?>
						<tr>
							<td><?php echo $key + 1 ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><img src="uplodas/<?php echo $value['image'] ?>" alt=""></td>
							<td><?php echo $value['price'] ?></td>
							<td><?php echo $value['category_name'] ?></td>
							<td>
								<a href="edit_product.php?id=<?php echo $value["id"] ?>" class="btn btn-info">Edit</a>
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