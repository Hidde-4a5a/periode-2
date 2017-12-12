<?php

class quick_maths{

  public $numbers = null;
  public $total = null;

}

class plus extends quick_maths{

  public function __construct($numbers) {
    $this->numbers = $numbers;
  }

  public function plus() {
    foreach ($this->numbers as &$value) {
      $this->total += $value;
    }
    return $this->total;
  }
}

class min extends quick_maths{

  public function __construct($numbers) {
    $this->total = -$numbers[0];
    $this->numbers = $numbers;
  }

  public function min() {
    foreach ($this->numbers as &$value) {
      $this->total -= $value;
    }
  return $this->total;
  }
}

class keer extends quick_maths{

  public function __construct($numbers) {
    $this->total = 1;
    $this->numbers = $numbers;
  }

  public function keer() {
    foreach ($this->numbers as &$value) {
      $this->total *= $value;
    }
    return $this->total;
}
}

$arr = array(4,2,4,4);
$sum1 = new min($arr);


echo $sum1->min();


 ?>
