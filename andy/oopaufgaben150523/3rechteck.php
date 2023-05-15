<?php

class Rechteck {
    private $laenge;
    private $breite;
    
    public function __construct($l, $b) {
        $this->laenge = $l;
        $this->breite = $b;
    }
    
    public function getLaenge() {
        return $this->laenge;
    }
    
    public function setLaenge($l) {
        $this->laenge = $l;
    }
    
    public function getBreite() {
        return $this->breite;
    }
    
    public function setBreite($b) {
        $this->breite = $b;
    }
    
    public function berechneFlaeche() {
        return $this->laenge * $this->breite;
    }
    
    public function berechneUmfang() {
        return 2 * ($this->laenge + $this->breite);
    }
}




$meinRechteck = new Rechteck(5, 10);


echo "Fläche: " . $meinRechteck->berechneFlaeche() . "\n";
echo "Umfang: " . $meinRechteck->berechneUmfang() . "\n";

// Die Länge und Breite des Rechtecks ändern und erneut Fläche und Umfang berechnen und ausgeben

$meinRechteck->setLaenge(7);
$meinRechteck->setBreite(3);

echo "Fläche: " . $meinRechteck->berechneFlaeche() . "\n";
echo "Umfang: " . $meinRechteck->berechneUmfang() . "\n";