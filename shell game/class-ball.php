<?php

class ball{
  public $color = null;

  public function __construct($color){
    $this->color = $color;
  }

  public function show(){
    return $this->color;
  }
}

?>
