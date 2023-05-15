<?php
abstract class Tier {
  abstract public function macheGeraeusch();
}

class Hund extends Tier {
  public function macheGeraeusch() {
    echo "Wuff!\n";
  }
}

class Katze extends Tier {
  public function macheGeraeusch() {
    echo "Miau!\n";
  }
}

class Vogel extends Tier {
  public function macheGeraeusch() {
    echo "Zwitscher!\n";
  }
}


$hund = new Hund();
$hund->macheGeraeusch(); 

$katze = new Katze();
$katze->macheGeraeusch(); 

$vogel = new Vogel();
$vogel->macheGeraeusch(); 
?>
