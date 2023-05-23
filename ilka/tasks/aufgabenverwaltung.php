<?php
include_once("Tasks.php");

$p = new Tasks();

if (isset($_POST['search']))
    $tasks = $p->fetchSearch();
else
    $tasks = $p->fetchAll();


if(isset($_POST['insert']))
{
    $p->title = $_POST['title'];
    $p->description = $_POST['description'];
    $p->created_at = $_POST['created_at'];
    $p->updated_at = $_POST['updated_at'];

    $p->save();
}

$heute = date("d.m.Y");
?>
<html>
    <body>
        <p>Aufgabenverwaltung</p>
        <p>Suche:</p>
        <form action="" method="post">
            <input type="text" name="search" value="<?php if (isset($_POST['search'])) echo $_POST['search']; ?>">
            <input type="submit" value="Suche">
        </form>
        <table border=\"1\">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td colspan="2">&nbsp;</td>
            </tr>
<?php
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
?>
        </table>
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
        <input type="submit" name="insert" value="Send"/><br>
        </form>
    </body>
</html>