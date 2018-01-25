<?php

class Logger {
  private static $instance = null;

  

  public function write($message) {
    echo $message;
  }

  public static function getInstance() {
    if (static::$instance === null) {
      static::$instance = new Logger();
      }
      return static::$instance;
  }
}

$logger = Logger::getInstance();
$logger->write('<br>my message<br>');
$logger2 = Logger::getInstance();
$logger2->write('my other message<br>');

var_dump($logger === $logger2);

var_dump($logger === $logger2);

$logger3 = new Logger();
 ?>
