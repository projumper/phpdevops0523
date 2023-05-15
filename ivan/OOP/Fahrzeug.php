<?php
//Abstarktion, Veerbung, Kapselung, Polymorphismus

class Fahrzeug 
{
    public $marke;

    public $modell;

    public $farbe;

    public $typ;

    
    public function starten()
    {
        echo "Fahrzeug ist an \n\r";

    }

    public function stoppen()
    {
        echo "Fahrzeug ist aus";
    }
}