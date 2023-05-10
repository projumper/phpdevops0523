<?php

$produkt1 = array('name'=>'Tasse', 'preis'=>2, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Becher', 'preis'=>1, 'farbe'=>'grün' );
$produkt3 = array('name'=>'Glas', 'preis'=>5, 'farbe'=>'weis' );
$produkte = array($produkt1, $produkt2, $produkt3,);


var_dump($produkte);


for($i=0; $i<3; $i++)
{
    foreach($produkte[$i] as $key => $value)
    {
        if($key == 'preis')
            $produkte[$i][$key] = $value *1.5;
    }
}