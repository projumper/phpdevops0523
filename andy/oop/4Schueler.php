<?php

class Schüler {
    private $name;
    private $noten = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function addNote($note) {
        $this->noten[] = $note;
    }

    public function berechneDurchschnitt() {
        $anzahlNoten = count($this->noten);
        if ($anzahlNoten == 0) {
            return 0;
        }
        $summeNoten = array_sum($this->noten);
        return $summeNoten / $anzahlNoten;
    }

    public function gibNameUndDurchschnittAus() {
        $durchschnitt = $this->berechneDurchschnitt();
        echo "Name: " . $this->name . "\n";
        echo "Durchschnitt: " . $durchschnitt . "\n";
    }
}



$schueler = new Schüler("Andy Maass");
$schueler->addNote(3);
$schueler->addNote(4);
$schueler->addNote(5);
$schueler->gibNameUndDurchschnittAus(); 