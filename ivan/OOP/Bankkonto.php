<?php 

//Kapselung

class Bankkonto
{
    public $kundenname;
    private $kontostand;

    public function __construct($kundenname)
    {
        //echo "nix";
        $this->kontostand = 0;
        $this->kundenname = $kundenname;
    }


    public function einzahlen($betrag)
    {
        //$this->kontostand = $this->kontostand + $betrag 
        $this->kontostand += $betrag;
    }

    public function auszahlen ($betrag)
    {
        if($this->kontostand >= $betrag)
        {
            $this->kontostand -= $betrag;
        }else{
            echo "junge junge !";
        }
    }

    public function getKontostand()
    {
        return $this->kontostand;
    }

}




$andykonto = new Bankkonto("Andy Maass");
echo "Kontostand: ".$andykonto->getKontostand()."\r\n";
$andykonto->einzahlen(1000);
echo "Kontostand: ".$andykonto->getKontostand()."\r\n";
$andykonto->auszahlen(100);
echo "Kontostand: ".$andykonto->getKontostand()."\r\n";

