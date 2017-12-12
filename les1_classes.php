<?php

class Person
{
	public $name = '';
	public $age = null;
	
	public function __construct($n, $a) {
		$this->name = $n;
		$this->age = $a;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	public function setAge($a) {
		if ($a => 0 && $a =< 150){
			$this->age = $a;
		}
	}
	
	public function overAge() {
		
	}
	
	public function showInfo() {
		return 'Dit is ' . $this->name . " zijn/haar leeftijd is " . $this->age . '.<br>';
	}
}

class Car
{
	public $color = '';
	public $brand = '';
	public $model = '';
	public $fuel = '';
	
	public function __construct($col, $br, $mod, $fl) {
		$this->color = $col;
		$this->brand = $br;
		$this->model = $mod;
		$this->fuel = $fl;
	}
	
	public function sustainable() {
		if ($this->fuel == 'Electric'){
			return true;
		} else {
			return false;
		}
	}
	
	public function getColor() {
		return $this->fuel;
	}
	
	public function setColor($col) {
		if ($col == 'Green' || $col == 'Blue' || $col == 'Red'){
			$this->fuel = $col;
		}
	}
	
	public function showInfo() {
		return 'Details van ' . $this->model . ":<br> Color - " . $this->color . "<br> Brand - " . $this->brand . "<br> Model - " . $this->model . "<br> Fuel - " . $this->fuel;
	}
}

$tim = new Person('Tim', 21);
echo $tim->showInfo();

$mustang = new Car('Green', 'Ford', 'Mustang', 'Electric');
echo $mustang->showInfo();
echo $mustang->sustainable();



?>