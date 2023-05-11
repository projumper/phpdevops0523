<?php

//use mysqli;
//use Exception;

$produkte = array();

//https://www.php.net/manual/de/book.mysqli.php
//connection
$con1 = $mysqli = new mysqli("localhost", "root", "", "pim");

$res = $con1->query("SELECT * FROM produkte ");

while ($row = $res->fetch_assoc()) {
    
    $produktX = array('name'=>$row['name'], 'preis'=>$row['preis'], 'farbe'=>$row['farbe'] );
    $produkte[] = $produktX;

}

function check($value1, $value2, $operator)
{
   
    //1. sind val1 und 2 überhaupt zaheln
    //2. ob der operator gültig ist
    //3. DivisionByZeroError

    //https://www.php.net/manual/de/function.is-int.php

    if (!is_int($value1)) return false;
    if (!is_int($value2)) return false;
    //if ($value2 == 0) return false;
    //if (($operator != '+') || ($operator != '-') || ($operator != '*') || ($operator != '/') || ($operator != '%')) return false;


    return true;
}

function calculate_pro($value1, $value2, $operator)
{



    if (!check($value1, $value2, $operator)) 
    {
        echo "Parameter hauen nicht hin !";
        return false;
    }
    

    if ($operator == '+') 
        return $value1 + $value2;

    if ($operator == '-') 
        return $value1 - $value2;

    if ($operator == '/') 
        return $value1 / $value2;

    if ($operator == '*') 
        return $value1 * $value2;

    if ($operator == '%') 
    return $value1 * (($value2 + 100)/100);

}