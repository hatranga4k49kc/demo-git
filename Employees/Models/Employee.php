<?php 
	namespace Models;

	class Employee{
		private $firstName;
		private $lastName;
		private $address;
		private $job;

		public function __construct($firstName = null, $lastName = null, $address = null, $job = null,$day_of_birth = null){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->day_of_birth = $day_of_birth;
			$this->address = $address;
			$this->job = $job;
		}

		public function setFirstName($firstName){
			$this->firstName = $firstName;

		}
		public function getFirstName(){
			return $this->firstName;
		}

		public function setLastName($lastName){
			$this->lastName = $lastName;
		}
		public function getLastName(){
			return $this->lastName;
		}
		public function setAddress($address){
			$this->address = $address;
		}
		public function getAddress(){
			$this->address = $address;
		}
		public function setJob($job){
			$this->job = $job;
		}
		public function getJob(){
			return $this->job;
		}
		public function setday_of_birth($day_of_birth){
			$this->day_of_birth = $day_of_birth;
		}
		public function getday_of_birth(){
			return $this->day_of_birth;
		}

	}



 ?>