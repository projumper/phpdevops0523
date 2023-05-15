<?php
class Einkaufswagen
{
    public $inhalt = array();
    public $value;

    public function hinzufuegen()
    {
        array_push($this->inhalt, $this->value);
    }

    public function entfernen()
    {
        array_pop($this->inhalt);
    }

    public function show()
    {
        foreach($this->inhalt as $value)
        {
            print_r($value);
        }
    }
}
