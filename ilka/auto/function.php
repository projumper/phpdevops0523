<?php
$produkte = array();
$value2 = 20;
$operator = '%';

$db = new mysqli("localhost", "root", "", "produkte");
$res = $db->query("SELECT * FROM produkte, stock WHERE produkte.stock = stock.s_id");
while ($row = $res->fetch_assoc())
{
    $produkt_pro_preis = calculate_pro($row['preis'], $value2, $operator);
    $produkte[] = $row;
    array_push($produkte);
}

function check($value1, $value2, $operator)
{
    $ergebnis1 = false;
    $ergebnis2 = false;
    $ergebnis3 = false;

    //1. sind val1 und 2 überhaupt zaheln
    $zahl1 = is_int($value1);
    $zahl2 = is_int($value2);
    if ($zahl1 == true && $zahl2 == true)
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
        return $value1 . "-" . $value2 . "-" . $operator;
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
