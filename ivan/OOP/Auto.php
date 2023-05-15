<?php

//Klasse, Objekt, Instanz
//Klasse -> Eigenschaften und Aktionen
//Eigenschaften - > Varible
//Aktionen - > Methoden (ähnlich Funktionen) 

//class Auto extends eine andere Klasse || implements Interface

class Auto
{
    //Eigenschafte
    public $marke;

    public $modell;

    public $farbe;

    //Aktionen bzw Methode
    public function starten()
    {
        echo "auto an \n\r";

    }

    public function stoppen()
    {
        echo "auto aus";
    }
}


$meineAutos = array();

//Zafira Life
$meinAuto = new Auto();
$meinAuto->marke = "Opel";
$meinAuto->modell = "Zafira Life";
$meinAuto->farbe = "schwarz";

//Zafira starten
echo $meinAuto->modell. " wird jetzt gestartet  \n\r";
$meinAuto->starten();

//Zafira aus

$meinAuto->stoppen();


//var_dump($meinAuto);
