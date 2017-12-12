<html>
<head>
<style>
/* CSS styling */
 body { text-align:center; font-family: arial; }
 .cups { margin:20px auto 70px; width:520px; height:183px; border-bottom:3px solid #000;
}
 .cup { width:132px; height:113px; background-image:url(images/cup.png); float:left; margin:0
20px; }
 .ball { position:absolute; margin-top:72px; margin-left:44px; z-index:-1; width:43px;
height:41px; background:url(images/ball.png); }
 .putdown { margin-top:70px; }
 .putdown .ball { margin-top:72px; }
 .liftup { margin-top:0px; }
 .liftup .ball { margin-top:142px; }
 .player { margin:0 auto; width:92px; height:243px; background:transparent url(images/player.png)
no-repeat 0 60px; }
 .clear { clear:both; }
 .red { background-color:red; }
 .yellow { background-color:yellow; }
 .blue { background-color:blue; }
</style>
</head>
<body>
   <div class="cups">
        <?php
        $cups = array($cupUno, $cupDos, $cupTres);
        $rand_keys = array_rand($cups,1);
          if (isset($_GET["show_cup"]) && $_GET["show_cup"] == $_SESSION['ballLocation']) {
            $score->add();
            foreach ($cups as $eenCup) {
              $eenCup->liftUp();
            }
        ?>
          <script>
            alert("GOED!");
          </script>
        <?php
      } else if (isset($_GET["show_cup"]) && $_GET["show_cup"] != $_SESSION['ballLocation']) {
        ?>
          <script>
            alert("FOUT!");
          </script>
        <?php
      } else if (isset($_GET["restart"])) {
        $_SESSION['score'] = 0;
        ?>
        <script>
        alert("SOCE WAS SET TO 0!");
        </script>
      <?php
      }


     foreach ($cups as $eenCup) {
       $eenCup->liftUp();
       if ($cups[$rand_keys] === $eenCup) {
         $cups[$rand_keys]->ball = $ball;
         $_SESSION['ballLocation'] = $rand_keys;
       }
       echo $eenCup->show();
     }
     ?>
   </div>
   <div class="clear"></div>
   </div>
   <div class="player">
   <strong><?php echo $player->show(); ?></strong>
  </div>
  <a href="?restart">Restart</a>
</body>
</html>
