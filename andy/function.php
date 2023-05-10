<?php
$produkt1 = array('name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkte = array($produkt1, $produkt2);

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



for($i=0; $i<2; $i++)
{
    //$produkte[0]
    foreach($produkte[$i] as $key => $value)
    {

        //'name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot'
        if($key == 'preis')
            //$produkte[0]['preis'] = 10 *1.1
            $produkte[$i][$key] = calculate_pro($value, 0, '');
    }
}


var_dump($produkte);
