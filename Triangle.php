<?php 
include_once ('Shape.php');
/**
 * 
 */
class Triangle extends Shape
{
	public $side1;
	public $side2;
	public $side3;
	function __construct($name, $side1, $side2, $side3)
	{
		parent::__construct($name);
		$this->side1 = $side1;
		$this->side2 = $side2;
		$this->side3 = $side3;
	}
	public function getPerimeter(){
		return $this->side1 + $this->side2 + $this->side3;
	}
	public function getArea(){
		return sqrt($this->getPerimeter()/2*($this->getPerimeter()/2 -$this->side1)*($this->getPerimeter()/2 -$this->side2)*($this->getPerimeter()/2 -$this->side3));
	}
	public function getSide(){
		$side = array($this->side1,$this->side2,$this->side3);
		$side_string = implode(',',$side);
		return $side_string;
	}

}



 ?>