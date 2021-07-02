<?php 
if(isset($_POST["submit"])){
	$arr_string = $_POST["arr"];
	$arr = explode (",",$arr_string );

	$min = null;
	

	for ($i = 0; $i < count($arr); $i++)
	{
		if ($min == null){
			$min = $arr[$i];
			
		}
		else {
			if ($arr[$i] < $min){
				$min = $arr[$i];
				
			}
		}
	}
	echo "giá trị nhỏ nhất của mảng là $min";
}
else{
	echo "no submit";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" role="form">
					<legend>Form title</legend>

					<div class="form-group">
						<label for="">label</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="arr">
					</div>

					

					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>

		</div>

	</div>
</body>
</html>