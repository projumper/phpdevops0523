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

$d = 1;
$e = 5;

if(($d != $e) || ($d < 4)) 
{
    echo "d = e";
}else{
    echo "d != e";
}

if(($d != $e) && ($d < 4)) 
{
    echo "d = e";
}else{
    echo "d != e";
}

