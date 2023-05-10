<?php
$x = 1;
$y = 1.1;
$a = "hello world";
$b = array(1,2);
$c = true; $d = false;

//Ausgabe
//echo "Hello World";
//print_r($x); print_r("string"); 
//var_dump($x); var_dump("string"); 

//echo $y."--".$a.$c;
//var_dump($x);
//print_r($x);
//var_dump($b);
//var_dump($b[1]);

$d = 3;
$e = 5;
if(($d != $e) || ($d < 4)) 
{
    echo "d = e";
}else{
    echo "d != e";
}

if(($d != $e) && ($d < 4)) 
{
    echo "d1 = e1";
}else{
    echo "d1 != e1";
}




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
