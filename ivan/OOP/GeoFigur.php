<?php

//Polymorphismus

abstract class GeoFigur 
{
    abstract public function berechneFlaeche();
}


class Quadrat extends GeoFigur
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function berechneFlaeche(){
        $this->a = $this->a*$this->a;
    }

    public function getFlaeche()
    {
        echo $this->a;
    }
}

class Viereck extends GeoFigur
{
    private $a;
    private $b;

    private $f;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function berechneFlaeche(){
        $this->f = $this->a * $this->b;
    }

    public function getFlaeche()
    {
        echo $this->f;
    }
}


$formen = array (
    new Quadrat(5),
    new Viereck (12, 45),
    new Viereck (120, 45),
    new Viereck (1, 45),
    new Viereck (12, 4)
);

foreach($formen as $form)
{
    $form->berechneFlaeche();
    echo " die Fläche ist:  ".$form->getFlaeche();
}