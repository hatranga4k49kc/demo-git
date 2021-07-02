
<?php
if(isset($_POST["submit"])){
	$number_1 = $_POST["number_1"];
	$number_2 = $_POST["number_2"];

	if($number_2 == 0){
		echo "illegal";
	}
	else{
		$number_a = $number_1+$number_2;
		echo " $number_1 + $number_2 = $number_a";
		$number_b = $number_1 - $number_2;
		echo " $number_1 - $number_2 = $number_b";

		$number_c = $number_1*$number_2;
		echo " $number_1 * $number_2 = $number_c";

		$number_d = $number_1+$number_2;
		echo " $number_1 / $number_2 = $number_d";





	}
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
						<label for="">number_1</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number_1">
					</div>

					<div class="form-group">
						<label for="">number_2</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number_2">
					</div>

					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>

			</div>
		</div>
		
	</div>
	
</body>
</html>