<?php

class Einkaufswagen {
    private $inhalt = array();
  
    public function addGegenstand($gegenstand) {
      array_push($this->inhalt, $gegenstand);
    }
  
    public function removeGegenstand($gegenstand) {
      $index = array_search($gegenstand, $this->inhalt);
      if ($index !== false) {
        array_splice($this->inhalt, $index, 1);
      }
    }
  
    public function getInhalt() {
      return $this->inhalt;
    }
  }



  
$wagen = new Einkaufswagen();

// Gegenstände hinzufügen
$wagen->addGegenstand('Apfel');
$wagen->addGegenstand('Brot');
$wagen->addGegenstand('Milch');

// Gegenstand entfernen
$wagen->removeGegenstand('Brot');

// Inhalt ausgeben
$inhalt = $wagen->getInhalt();
print_r($inhalt);