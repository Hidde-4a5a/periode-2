<?php

class cup{
  public $color = null;
  public $type = null;
  public $positionUp = true;
  public $ball = null;
  public $id = null;

  public function __construct($color, $type){
    $this->color = $color;
    $this->type = $type;
  }

  public function show(){
    if ($this->positionUp == true) {
      if ($this->ball instanceof ball) {
        return '<a href="?show_cup='.$this->id.'" class="cup '.$this->color.' liftup"><div class="ball red"></div></a>';
      } else {
        return '<a href="?show_cup='.$this->id.'" class="cup '.$this->color.' liftup"></a>';
      }
      } else if ($this->positionUp == false) {
        return '<a href="?show_cup='.$this->id.'" class="cup '.$this->color.' putdown"></a>';
    }
  }
  public function liftUp() {
    $this->positionUp = true;
  }
  public function putDown() {
    $this->positionUp = false;
  }
}

?>
