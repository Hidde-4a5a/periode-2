<?php
// Start the session
session_start();
$_SESSION['ballLocation'];
$_SESSION['score'];

include 'class-ball.php';
include 'class-player.php';
include 'class-cup.php';
include 'game.php';

$ball = new ball('red');
// echo $ball->setColor();

$player = new player('Hiddo');
// echo $player->setAmount();

$score = new game();

$cupUno = new cup('yellow', 'plastic');

$cupUno->id = 0;

$cupDos = new cup('yellow', 'plastic');

$cupDos->id = 1;

$cupTres = new cup('yellow', 'plastic');

$cupTres->id = 2;

// var_dump($ball->show());
// var_dump($player);
// var_dump($cupUno);
// var_dump($cupDos);
// var_dump($cupTres);
include 'view.php';

?>
