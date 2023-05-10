<?php

$arr = array(1,2,4,5,6,7);


foreach($arr as $key => $el)
{
    $arr[$key] = $el * 1.9; 
}

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