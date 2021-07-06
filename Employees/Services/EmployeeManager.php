<?php 
namespace Services;

class EmployeeManager{
	private $employees;
	public function __construct(){

		$this->employees = array();
	}
	public function add($employees){

		$this->employees[] = $employees;
	}
	public function getEmployees(){
		return $this->employees;
	}


}


 ?>