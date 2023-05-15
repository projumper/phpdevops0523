<?php
class Rechteck
{
    public $laenge;
    public $breite;

    public function flaecheninhalt()
    {
        $flaeche = $this->laenge * $this->breite;
    }

    public function umfang()
    {
        $umfang = 2 * $this->laenge + 2 * $this->breite;
    }
}