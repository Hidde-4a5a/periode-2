<?php

abstract class gooi {
    protected $numbers = array();

    public function __construct(){

    }
    protected abstract function getNumber();
    protected abstract function roll();
}

class DiceNormal extends gooi {

    public function getNumber() {
      for ($x = 0; $x <= 4; $x++) {
        array_push($this->numbers, mt_rand(1,6));
      }
      return $this->numbers;
    }

    public function roll() {
      foreach ($this->numbers as $value) {
          echo '<img src=normal'. $value .'.png height="42" width="42">';
      }
  }
}

class DiceInverted extends gooi {

    public function getNumber() {
      for ($x = 0; $x <= 4; $x++) {
        array_push($this->numbers, mt_rand(1,6));
      }
      return $this->numbers;
    }

    public function roll() {
      foreach ($this->numbers as $value) {
          echo '<img src=inverted'. $value .'.png height="42" width="42">';
      }
  }
}

class Dice3DNumbers extends gooi {

    public function getNumber() {
      for ($x = 0; $x <= 4; $x++) {
        array_push($this->numbers, mt_rand(1,6));
      }
      return $this->numbers;
    }

    public function roll() {
      foreach ($this->numbers as $value) {
          echo '<img src=3dnumbers'. $value .'.png height="42" width="42">';
      }
  }
}

class Dice3DEyes extends gooi {

    public function getNumber() {
      for ($x = 0; $x <= 4; $x++) {
        array_push($this->numbers, mt_rand(1,6));
      }
      return $this->numbers;
    }

    public function roll() {
      foreach ($this->numbers as $value) {
          echo '<img src=3deyes'. $value .'.png height="42" width="42">';
      }
  }
}

$a = new DiceNormal();
$a->getNumber();
echo $a->roll();

 ?>
