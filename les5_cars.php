<?php
interface iCar {
  public function __construct($brand, $model, $fuel, $color = 'black');
  public function showInfo();
  public function getFuel();
  public function duurzaamCheck();
  public function getColor();
}

class Car implements iCar
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
