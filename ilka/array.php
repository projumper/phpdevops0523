<?php
$kfz1 = array('name'=>'VW', 'ps'=>160, 'preis'=>'40000' );
$kfz2 = array('name'=>'BMW', 'ps'=>180, 'preis'=>'42000' );
$produkte = array($kfz1, $kfz2);

var_dump($produkte);

for($i=0; $i<2; $i++)
{
    foreach($produkte[$i] as $key => $value)
    {
        if($key == 'ps')
            $produkte[$i][$key] = $value + 20;
    }
}

var_dump($produkte);