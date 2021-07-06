<?php 
class Point2D{
	private $x;
	private $y;
	private $arr;

	public function __construct($x=0.0,$y=0.0){
		$this->x = $x;
		$this->y = $y;


	}
	public function getX(){
		return $this->x;
	}
	public function getY(){
		return $this->y;
	}
	public function setXY($x,$y){
		$this->x = $x;
		$this->y = $y;
		$this->arr = array($this->x,$this->y);

	}
	public function getXY(){
		return $this->arr;
	}
	

}



 ?>