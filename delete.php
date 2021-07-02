<?php 
	$arr= array(1,3,5,7,6,4,10,13,9,15);
	if(isset($_POST["submit"])){
		$number = $_POST["number"];
		$j = null;
		for ($i=0; $i <count($arr) ; $i++) { 
			if($arr[$i]==$number){
				$j = $i;
			}
				
			
		}
		if($j==null){
			echo "k tồn tại số $number";
		}else{
			
			unset($arr[$j]);
			print_r($arr);
		}

		
	}
	else {
		$arr_strings = implode(",",$arr);
		echo "mảng ban đầu là $arr_strings";
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
					
					<div class="form-group">
						<label for="">Nhập phần tử cần xóa</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>

			</div>
		</div>
	 </div>
</body>
</html>