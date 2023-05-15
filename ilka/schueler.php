<?php
class schueler
{
    public $name;
    public $noten = array();
    public $note;

    public function neuenote()
    {
        array_push($this->noten, $this->note);
    }

    public function durchschnitt()
    {
        $durchschnitt = array_sum($this->noten) / count($this->noten);
    }
}

$schueler1 = new schueler;
$schueler1->name = "Thomas";
$schueler1->noten = array(2,1,3,2);
echo $schueler1->durchschnitt() . "\n\r";
echo $name;