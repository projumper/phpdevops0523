<?php
include ("Fahrzeug.php");

class Lkw extends Fahrzeug
{
    public $ladevolumen;
}

$lkw = new Lkw();

$lkw->starten();
$lkw->stoppen();

var_dump($lkw);