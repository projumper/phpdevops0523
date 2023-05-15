<?php
$db = new mysqli("localhost", "root", "", "produkte");
$res = $db->query("SELECT * FROM produkte, stock WHERE produkte.stock = stock.id");
while ($row = $res->fetch_object())
{
    var_dump($row);
}