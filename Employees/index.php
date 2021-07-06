<?php 
	include "./Models/Employee.php";
	include "./Services/EmployeeManager.php";

	use Services\EmployeeManager;
	use Models\Employee;

	$EmployeeManager = new EmployeeManager();
	$EmployeeManager->add(new Employee("Nguyen Van A"));
	$EmployeeManager->add(new Employee("Nguyen Van B"));
	$employee = $EmployeeManager->getEmployees();
	foreach ($employee as $employee){
		echo $employee->getFirstName(). "<br/>";
	}



 ?>