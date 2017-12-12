<?php
  class user {
    protected $username = null;
    protected $password = null;

    public function __construct($name, $pw){
      $this->username = $name;
      $this->password = $pw;
      // $this->rol = $rol;
      // if ($name == 'tomas' && $pw == 'legend32') {
      //   echo 'logged in <br>';
      // } else if ($name == 'anna' && $pw == 'whatevah96') {
      //   echo 'logged in <br>';
      // } else {
      //   echo 'false input';
      // }
    }

    public function name() {
      return $this->username;
    }

    public function pass() {
      return $this->password;
    }

    public function changePass($pw) {
      $this->password = $pw;
    }
  }

  class type extends user {
    protected $rol = null;

    public function doSuperviserStuff() {
      if ($this->rol = 'supervisor') {

      } else {
        echo 'nope<br>';
      }
    }

    public function doNormalUserStuff() {
      if ($this->rol = 'normaluser') {

      } else {
        echo 'nope<br>';
      }
    }
  }


  $a = new user('tomas', 'legend32');
  $b = new user('anna', 'whatevah96');
  $b->changePass('hiddo');
  echo $b->pass();
 ?>
