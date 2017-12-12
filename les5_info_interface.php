<?php
interface iInfo {
    public function showInfo();
}
interface iCar {
  public function __construct($brand, $model, $fuel, $color = 'black');
  public function getFuel();
  public function duurzaamCheck();
  public function getColor();
}

class Car implements iCar, iInfo
{
  public $color = null;
  public $brand = null;
  private $model = null;
  private $fuel = null;

  public function __construct($brand, $model, $fuel, $color = 'black'){
    $this->brand = $brand;
    $this->model = $model;
    $this->fuel = $fuel;
    $this->color = $color;
  }

  public function showInfo(){
  return ;
  }

  public function getFuel(){
    return $this->fuel;
  }

  public function duurzaamCheck(){
    if($this->fuel == 'Electricity'){
      return 'duurzaam';
      }
      else{
        return false;
      }
  }

  public function getColor(){
    return $this->color;
  }

  public function setColor(){
    if($this->color = 'Red'){
      return true;
    }else{
      return false;
    }
  }
}

class Person implements iInfo{

  public $name = '';
  public $age = '';

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function showInfo(){
  return 'Dit is ' . $this->name . ' en zijn/haar leeftijd is ' . $this->age;
  }

  public function getAge(){
    return $this->age;
  }

  public function setAge(){
    if($this->age < 151){
      return 'Mens';
    }else{
      return 'You are a legend';
    }
  }

  public function adultCheck(){
    if($this->age < 18){
      return 'Minderjarig';
    }else{
      return 'Volwassen';
    }
  }
}

// main code
$tim = new Person('Tim', 21);
echo $tim->showInfo() . '<br>';
echo $tim->setAge() . '<br>';
echo $tim->adultCheck() . '<br>';

// main code
$ford = new Car('Ford', 'Mustang', 'Gasoline', 'white');
var_dump($ford->setColor());
echo $ford->showInfo();
echo $ford->duurzaamCheck();


echo '<br>';
$toyota = new Car('Toyota', 'Prius', 'Electricity', 'Red');
echo $toyota->setColor();
echo $toyota->showInfo();
echo $toyota->duurzaamCheck();

echo '<br>';
echo '<br>';
$volksagon = new Car('Volksagon', 'Golf', 'Diesel', 'Blue');
echo $volksagon->setColor();
echo $volksagon->showInfo();
echo $volksagon->duurzaamCheck();

// $sharon = new Car('Sharon', 25);
// echo $sharon->showInfo();

?>
