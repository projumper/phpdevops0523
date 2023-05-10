<?php
$produkt1 = array('name'=>'Tisch', 'preis'=>20, 'farbe'=>'braun' );
$produkt2 = array('name'=>'Stuhl', 'preis'=>10, 'farbe'=>'schwarz' );
$produkte = array($produkt1, $produkt2);

var_dump($produkte);


for($i=0; $i<2; $i++)
{
    
    foreach($produkte[$i] as $key => $value)
    {
        if($key == 'preis')
            $produkte[$i][$key] = $value *1.9;
    }
}
var_dump($produkte);