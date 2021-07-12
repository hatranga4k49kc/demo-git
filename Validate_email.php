<?php 
$regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

function ValidateEmail($str){
	$regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

	if(preg_match($regexp,$str)){
		echo "yes";
	}else{
		echo "no";
	}
}

if(isset($_POST['submit'])){
	$email = $_POST["email"];
	ValidateEmail($email);
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
 					<legend>email</legend>
 				
 					<div class="form-group">
 						<label for="">label</label>
 						<input type="text" class="form-control" id="" placeholder="Input field" name="email">
 					</div>
 				
 					
 				
 					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
 				</form>

 			</div>
 		</div>
 	</div>
 </body>
 </html>