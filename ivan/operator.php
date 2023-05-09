<?php

//arthim.: +,-,*,/

$s = $a + $b;
$s = $a - $b;
$s = $a * $b;
//$s = $a / $b; // % vs /


//zuweisungsop.: =, +=, -=
$x = 10;
$y = 10;

$x += 10; // x = x + 10
$x -= 10; // x = x - 10

//vergleichoperatoren: ==, !=, <, >, <=, >=

//$x == $y
//$x != $y

//logischop.: &&, ||, !

//Bedinungen
//if-case

if(($x != $y) || ($x < 9)) //$x != $y
{
    echo "x = y";
}else{
    echo "x != y";
}


//1 0  1
//1 1  1
//0 0  0
//0 1  1

if(($x != $y) && ($x < 9)) //$x != $y
{
    echo "x = y";
}else{
    echo "x != y";
}

//1 0  0
//1 1  1
//0 0  0
//0 1  0

//Schleifen

$arr = array(12,32,33,34,35,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);

//for
for ($i=0; $i<10; $i++)
{
    //echo $i;
    echo $arr[$i]."\n\r";
}


foreach($arr as $elemet)
{
   //echo $elemet."\n\r";
}

//while (whiledo dowhile)
while(true)
{
    //mach irgendwas
    echo random_int($x, $y);
}

do{

}while(false);