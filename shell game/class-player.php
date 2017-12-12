<?php

class player{
  public $name = null;
//  public $amount = null;

  public function __construct($name){
    $this->name = $name;
//    $this->amount = $amount;
  }

  public function show(){
    return 'Name:'.$this->name.' '.'Amount:'.$_SESSION['score'];
  }
}

?>
