<?php
//int
$a = 5;

//string
$b = "Hallo";

//char
$c = "w";

//float
$d = 3.4;

//boolean
$e = true;

//array
$f = array(1,2,3,4);

echo $a . "\n";

print_r($b . "\n");

var_dump($c);

echo $d . "\n";

print_r($e . "\n");

var_dump($f);

if ($a > $d)
{
    echo "a ist kleiner" . "\n";
}

for ($i = 0; $i < 20; $i++)
{
    echo $i . "--";
}

echo "\n";

$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $und)
{
    echo $und . "--";
}