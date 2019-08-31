<?php 
	class Person {
		private $name;
		private $lastname;
		private $age;

		public function setName($name) {
			$this -> name = $name;
			return $this;
		}

		public function setLastName($lastname) {
			$this -> lastname = $lastname;
			return $this;
		}

		public function setAge($age) {
			$this -> age = $age;
			return $this;
		}

		public function getFullName() {
			return $this -> name.' '.$this -> lastname.' is '.$this -> age.' years old.';
		}
	}

	$person = new Person();
	$person -> setName('Douglas') -> setLastName('Pinheiro Goulart') -> setAge(16);

	echo $person -> getFullName();