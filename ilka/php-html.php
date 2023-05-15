<?php
include_once("function.php");

echo "<html>";
echo "<body><p>Ich bin ein dynamisches Dokument!</p>";
echo "<p>\$value2 = 20 -- \$operator = %</p>";
echo "<table border=\"1\">";
echo "<tr>";
foreach($produkte[0] as $key => $value)
{
    $bigkey = ucfirst($key);
    if ($key == 'ps')
        $bigkey = strtoupper($key);
    echo "<td>" . $bigkey . "</td>";
}
echo "<td>Calculate_pro</td>";
echo "</tr>";

$n = sizeof($produkte);

for($i=0; $i<$n; $i++)
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
    echo calculate_pro($price, 10, '%');
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body></html>";