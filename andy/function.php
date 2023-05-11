<?php

//use mysqli;
//use Exception;

$produkte = array();

//https://www.php.net/manual/de/book.mysqli.php
//connection
$con1 = $mysqli = new mysqli("localhost", "root", "", "pim");

$res = $con1->query("SELECT * FROM produkte");

while ($row = $res->fetch_assoc()) {
    
    $produktX = array('name'=>$row['name'], 'preis'=>$row['preis'] );
    $produkte[] = $produktX;

}

function check($value1, $value2, $operator)
{
    $ziel1 = false;
    $ziel2 = false;
    $ziel3 = false;

    //1
    $zahl1 = is_int($value1);
    $zahl2 = is_int($value2);
    if ($zahl1 == true && $zahl2 == true)
        $ziel1 = true;

    //2
    if (in_array($operator, array('+', '-', '*', '/', '%')))
        $ziel2 = true;

    //3
    if ($value1 != 0 && $value2 != 0)
        $ziel3 = true;

    if ($ziel1 == true && $ziel2 == true && $ziel3 == true)
        return true;
    else
        return false;
}


function calculate_pro($value1, $value2, $operator)
{

    //1. sind val1 und 2 überhaupt zaheln
    //2. ob der operator gültig ist
    //3. DivisionByZeroError

    if (check($value1, $value2, $operator)) return false;

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







