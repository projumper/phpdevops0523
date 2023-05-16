<?php

include_once("OOP-dyn/Produkte.php");
include_once("OOP-dyn/Stocks.php");

$p = new Produkte();

$produkte = $p->fetchAll();

echo "<html>";
echo "<body><p>ich bin ein dynamsiches dokument!</p>";
echo "<table border=\"1\">";
echo "<tr><td>Name</td><td>Preis</td><td>Farbe</td><td>Funktionen</td></tr>";

$count = count($produkte);

for($i=0; $i<$count; $i++)
{
    echo "<tr>";
    $price = 0;
    foreach($produkte[$i] as $key => $value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
        //echo "<td>".$value."</td>"
        if($key == 'preis')
            $price = $value;
   
    }
    echo "<td>";
    echo $p->calculate_pro($price, 10, '%');
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

echo 
'
<br>
<br>
<br>
<br>

<form action ="" method="post">
    <label>Obst Name</label><input type="text" name="name" value=""/><br>
    <label>Preis</label><input type="text" name="preis" value=""/><br>
    <label>Farbe</label><input type="text" name="farbe" value=""/><br>
    <label>Stock</label>
    <select name="stock">';
      
    //dyn optionen stock
    
    $s = new Stocks();
    $stocks = $s->fetchAll();
      
    $countStocks = count($stocks);

    for($i=0; $i<$countStocks; $i++)
    {
        foreach($stocks[$i] as $key => $value)
        {
            if($key == 'id')
                echo "<option>$value</option>";
        }
    }

echo '</select>
    <br>
    <input type="submit" value="Send"/><br>

</form>';

if($_POST)
{
    $p->name = $_POST['name'];
    $p->preis = $_POST['preis'];
    $p->farbe = $_POST['farbe'];
    $p->stock = $_POST['stock'];

    $p->save();
}

echo "</body></html>";