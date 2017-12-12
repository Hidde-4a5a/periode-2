<?php

class game{
  public $amountPerGame = 20;

  public function __construct(){
  }

  public function add(){
    $_SESSION['score'] += $this->amountPerGame;
  }
}

?>
