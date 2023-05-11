<?php

include_once("function.php");



echo "<html>";
echo "<body><p>ich bin ein dynamsiches dokument!</p>";
echo "<table border=\"1\">";
echo "<tr>";

$var = array("Name","Preis","Funktion");

foreach ($var as $key => $value)
    {echo "<td>";
        echo $value;
        echo "</td>";

}

echo "</tr>";

for($i=0; $i<4; $i++)
{
    echo "<tr>";
    $price = 0;
    foreach($produkte[$i] as $key => $value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
        
    }
    echo "<td></td>";
    echo "</tr>";
}
echo "</table>";

echo '<form action ="" method="post">
<input type="text" name="name" value="Name"/>
<input type="text" name="vorname" value="Vorname"/>
<input type="text" name="nachricht" value="Nachricht"/>
<input type="submit" value="Send"/>

</form>';



echo "</body></html>";