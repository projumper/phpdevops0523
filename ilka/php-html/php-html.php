<?php
include_once("Produkte.php");
include_once("Stocks.php");

$p = new Produkte();
$produkte = $p->fetchAll();

$s = new Stocks();
$stocks = $s->fetchAll();
    
$countStocks = count($stocks);
var_dump($stocks);
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
    echo $p->calculate_pro($price, 10, '%');
    echo "</td>";
    echo "</tr>";
}
?>
</table>
<form action="" method="post">
    <input type="text" name="name"><br>
    <input type="text" name="preis"><br>
    <input type="text" name="ps"><br>
    <select name="stock">
    <?php
    for($i=0; $i<$countStocks; $i++)
    {
        foreach($stocks[$i] as $key => $value)
        {
            if($key == 'id')
                echo "<option>$value</option>";
        }
    }
    ?>
    </select><br>
    <input type="submit" value="Send"/><br>
</form>
    <br>
<?php
if($_POST)
{
    $p->name = $_POST['name'];
    $p->preis = $_POST['preis'];
    $p->farbe = $_POST['farbe'];
    $p->stock = $_POST['stock'];

    $p->save();
}
?>
</form>
</body></html>