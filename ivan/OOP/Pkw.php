<?php 

include ("Fahrzeug.php");

//Vererbung

class Pkw extends Fahrzeug
{
    public $getriebeTyp;

    public function aufladen()
    {
        echo "der PKW wird aufgeladen";
    }

}


$pkw = new Pkw();
var_dump($pkw);

$pkw->starten();
$pkw->stoppen();
$pkw->aufladen();