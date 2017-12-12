<?php

class article {
  private $name = '';

  public static $countArticles = 0;

  public function __construct($name) {
    $this->name = $name;
    static::$countArticles+= 1;
  }

  public function getName() {
    return $this->name;
  }

  public static function getCountArticles() {
    return static::$countArticles;
  }

  private static function setCountArticles($amount) {
    static::$countArticles = $amount;
  }
}
 ?>
