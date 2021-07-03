<?php 
class QuadraticEquation
{
	private $a;
	private $b; 
	private $c;

	public function __construct($a, $b, $c){
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}


	public function getDiscriminant(){
		return $this->b*$this->b - 4*$this->a*$this->c;
	}

	public function getRoot1(){
		return (- $this->b + sqrt($this->b*$this->b - 4*$this->a*$this->c))/$this->a * 2;
	}

	public function getRoot2(){
		return (- $this->b - sqrt($this->b*$this->b - 4*$this->a*$this->c))/$this->a * 2;
	}

}


if(isset($_POST['submit'])){
	 $a=$_POST["number_a"];
	 $b=$_POST["number_b"] ;
	 $c=$_POST["number_c"] ;
$pt = new QuadraticEquation($a,$b,$c);
	
	
	if($pt->getDiscriminant()>0){
		echo $pt->getRoot1();
		echo $pt->getRoot2();
	}if($pt->getDiscriminant()==0){
		echo "PT có no kép là: ".$pt->getRoot1();
	}else{
		echo "ptvn";
	}

}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="" method="POST" role="form">
					<legend>QuadraticEquation</legend>

					<div class="form-group">
						<label for="">Nhập a</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number_a">
					</div>
					<div class="form-group">
						<label for="">Nhập b</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number_b">
					</div>
					<div class="form-group">
						<label for="">Nhập c</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="number_c">
					</div>

					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>

			</div>

		</div>

	</div>
</body>
</html>