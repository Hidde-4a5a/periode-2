<?php

  interface iFunctions {
      public function __set($name, $value);
      public function __get($name);
  }

  class MagicCar implements iFunctions {

    public function __set($name, $value) {
      if($name === 'color') {
        if($value === 'blue' || $value === 'red' || $value === 'green') {
        $this->color = $value;
        }
      }
    }

  public function __get($name) {
    if($name === 'color') {
      return $this->color;
    }
  }
  }

  $magicCarObject = new MagicCar();

  $magicCarObject->color = 'blue';
  echo $magicCarObject->color;

 ?>
