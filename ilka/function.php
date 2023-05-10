<?php
$produkt1 = array('name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkte = array($produkt1, $produkt2);

function namen($param1, $param2)
{

}

$value2 = 20;
$operator = 'a';

function check($value1, $value2, $operator)
{
    $ergebnis1 = false;
    $ergebnis2 = false;
    $ergebnis3 = false;

    //1. sind val1 und 2 überhaupt zaheln
    if (is_int($value1) && is_int($value2))
        $ergebnis1 = true;

    //2. ob der operator gültig ist
    if (in_array($operator, array('+', '-', '*', '/', '%')))
        $ergebnis2 = true;

    //3. DivisionByZeroError
    if ($value1 != 0 && $value2 != 0)
        $ergebnis3 = true;

    if ($ergebnis1 == true && $ergebnis2 == true && $ergebnis3 == true)
        return true;
    else
        return false;
}

function calculate_pro($value1, $value2, $operator)
{
    if (!check($value1, $value2, $operator)) return false;

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


//i=0
for($i=0; $i<2; $i++)
{
    //$produkte[0]
    foreach($produkte[$i] as $key => $value)
    {

        //'name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot'
        if($key == 'preis')
            //$produkte[0]['preis'] = 10 *1.1
            $produkte[$i][$key] = calculate_pro($value, $value2, $operator);
    }
}


var_dump($produkte);
//anweisuingen
