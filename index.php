<?php 

class Person {
	public $name;
	public $speciality;
	public $age;

	// public function __construct(){
	// 	echo "New person just created";
	// }

	public function __construct($name, $spec, $age){
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
	}

	public function greeting(){
		// echo "Hello! My name is $name. I am $spec and $age years old. ";
		echo "Hello! My name is " . $this->name  . ". I am " . $this->speciality  ." and " . $this->age  ." years old. ";
	}
}

$person1 = new Person('Peter', 'Programmer', 25);
$person1->greeting();

echo "<br><br>";

$person2 = new Person('Jane', 'Web-designer', 22);
$person2->greeting();

// $person1->name = 'Peter';
// $person1->speciality = 'Progammer';
// $person1->age = 25;

// $person1->greeting();

?>