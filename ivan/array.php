<?php

//array
//https://www.php.net/manual/de/book.array.php
//array liste, 

$arr = array(1,2,44,5,6,7);

//(1,2,4,5,6,7), erhöhen um 10%, (1.1,2.2,4.4,5.5,6.6,7.7), zurück in die datenbak

foreach($arr as $key => $el)
{
    $arr[$key] = $el * 1.1; 
}

$produkt1 = array('name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkte = array($produkt1, $produkt2);

var_dump($produkte);


//i=0
for($i=0; $i<2; $i++)
{
    //$produkte[0]
    foreach($produkte[$i] as $key => $value)
    {

        //'name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot'
        if($key == 'preis')
            //$produkte[0]['preis'] = 10 *1.1
            $produkte[$i][$key] = $value *1.1;
    }
}

//$produkte[0]['preis'] = 11;
//$produkte[1]['preis'] = 16.5;


//schreibe zurück in die DB

//O(n) - O-Notation
//for($i=0; $i<2000; $i++)
//    for($i=0; $i<200000; $i++)
//        for($i=0; $i<200000; $i++)
//            for($i=0; $i<200000; $i++)
