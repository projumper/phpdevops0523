<?php
include_once("Tasks.php");

$p = new Tasks();

$tasks = $p->fetchAll();

$heute = date("d.m.Y");
echo "<html>";
echo "<body><p>Aufgabenverwaltung</p>";
echo "<table border=\"1\">";
echo '<tr><td>ID</td><td>Title</td><td>Description</td>
<td>created_at</td><td>updated_at</td><td colspan="2">&nbsp;</td></tr>';

$count = count($tasks);

for($i=0; $i<$count; $i++)
{
    echo "<tr>";
    $price = 0;
    foreach($tasks[$i] as $key => $value)
    {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo '<td><a href="update.php?id=' . $tasks[$i]['id'] . '">ändern</a> 
    <a href="delete.php?id=' . $tasks[$i]['id'] . '">löschen</a></td>';
    echo "</tr>";
}
echo "</table>";
?>
<br>
<br>
<br>
Neu erstellen:
<br>

<form action ="" method="post">
<table border="0">
    <tr>
        <td><label>Title</label></td>
        <td><input type="text" name="title" value=""/></td>
    </tr>
    <tr>
        <td><label>Description</label></td>
        <td><input type="text" name="description" value=""/></td>
    </tr>
    <tr>
        <td><label>created_at</label></td>
        <td><input type="text" name="created_at" value="<?php echo $heute; ?>"/>
        </td>
    </tr>
    <tr>
        <td><label>updated_at</label></td>
        <td><input type="text" name="updated_at" value="<?php echo $heute; ?>"/></td>
    </tr>
</table>
<input type="submit" value="Send"/><br>
</form>
<?php
if($_POST)
{
    $p->title = $_POST['title'];
    $p->description = $_POST['description'];
    $p->created_at = $_POST['created_at'];
    $p->updated_at = $_POST['updated_at'];

    $p->save();
}

echo "</body></html>";