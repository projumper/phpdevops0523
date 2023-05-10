<?php
$produkt1 = array('name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkt4 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkt3 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkt5 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkt6 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkte = array($produkt1, $produkt2, $produkt3, $produkt4);

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