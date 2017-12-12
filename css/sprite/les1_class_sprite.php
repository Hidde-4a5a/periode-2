<?php
class character {
	private $naam = "";
	
	public function __construct($char) {
		switch ($char) {
			case "zwaard":
				$this->naam = "zwaard";
				break;
			case "staf":
				$this->naam = "staf";
				break;
			case "steen":
				$this->naam = "steen";
				break;	
			}
	}
	
	public function showcharacter(){
		return '<span class="sprite-world-of-warcraft '. $this->naam .'"></span>';
	}
	
	public function __destruct() {
		var_dump($this->naam);
	}


}


?>

<!DOCTYPE html>
<html>
<head>
<style>
.sprite-world-of-warcraft {
    height: 180px;
    display: inline-block;
}

.zwaard {
    width: 160px;
    background: url('sprite-world-of-warcraft.png') -30px 0;
}

.staf {
    width: 80px;
    background: url('sprite-world-of-warcraft.png') -190px 0;
}
.steen  {
    width: 180px;
    background: url('sprite-world-of-warcraft.png') -10px -175px;
}

</style>
</head>
<body>

<?php

	$man = new character('staf');
	echo $man->showcharacter();
	$man = null;
	echo "hallo";
?>

</body>
</html>
