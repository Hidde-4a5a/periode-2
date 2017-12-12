<?php
class MarioCartCharacter {
	protected $characterClass = null;
	
	public function __construct() {
		$this->characterClass = $characterClass;
	}
	
	public function getHTML() {
		return '<span class="mario-cart-character"' . $this->characterClass . '"></span>';
	}
	
	public function walk() {
		return 'Walking';
	}
	
	
}

class Mario extends MarioCartCharacter {
	
	public function __construct() {
		$this->characterClass = "mario";
	}
	
	public function jump() {
		return 'Jumping';
	}
}

class Luigi extends MarioCartCharacter {
	
	public function __construct() {
		$this->characterClass = "luigi";
	}
	
	public function swim() {
		return 'Swimming';
	}
}

$mario = new Mario();
echo $mario->walk() . '<br>';
echo $mario->jump() . '<br>';
echo $mario->getHTML() . '<br>';

$luigi = new Luigi();
echo $luigi->swim() . '<br>';
?>
