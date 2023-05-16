<?php

include_once("Produkte.php");

$p = new Produkte();
$produkte = $p->fetchAll();

echo "<html>";
echo "<body><p>ich bin ein dynamsiches dokument!</p>";
echo "<table border=\"1\">";
echo "<tr><td>Name</td><td>Preis</td><td>Funktionen</td></tr>";

for($i=0; $i<4; $i++)
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

echo '<form action ="" method="post">
<input type="text" name="name" value="Name"/>
<input type="text" name="vorname" value="Vorname"/>
<input type="text" name="nachricht" value="Nachricht"/>
<input type="submit" value="Send"/>

</form>';

var_dump($_POST);

echo "</body></html>";