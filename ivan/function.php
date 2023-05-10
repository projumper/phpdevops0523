<?php
$produkt1 = array('name'=>'Apfel', 'preis'=>10, 'farbe'=>'rot' );
$produkt2 = array('name'=>'Birne', 'preis'=>15, 'farbe'=>'grün' );
$produkte = array($produkt1, $produkt2);

function namen($param1, $param2)
{

}

function calculate_pro($value1, $value2, $operator)
{

    //1. sind val1 und 2 überhaupt zaheln
    //2. ob der operator gültig ist
    //3. DivisionByZeroError

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
            $produkte[$i][$key] = calculate_pro($value, 0, '');
    }
}


var_dump($produkte);
//anweisuingen
