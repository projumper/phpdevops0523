<?php
require_once("db.php");

$sql = "SELECT id, titel, beschreibung, erstellungsdatum, faelligkeitsdatum FROM aufgaben";
$result = $conn->query($sql);

if (isset($_POST['submit']))
{
    $i = 0;
    while($row = $result->fetch_assoc()) {
        $array = Array (
            "$i" => Array (
                "id" => '$row["id"]',
                "title" => '$row["title"]',
                "beschreibung" => '$row["beschreibung"]',
                "erstellungsdatum" => '$row["erstellungsdatum"]',
                "faelligkeitsdatum" => '$row["faelligkeitsdatum"]'
            ));
        
        $i++;
    }
    $json = json_encode($array);
    $bytes = file_put_contents("myfile.json", $json);
}

require_once("top.php");

if (isset($_POST['submit']))
{
?>
Die Json-Datei wurde erstellt. <a href="myfile.json">Json</a>
<?php
} else {
?>
        <table border="0" id="table">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Titel
                </th>
                <th>
                    Beschreibung
                </th>
                <th>
                    Erstellungsdatum
                </th>
                <th>
                    Fälligkeitsdatum
                </th>
            </tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<tr>
                <td>
                    <?php echo $row["id"]; ?>
                </td>
                <td>
                    <?php echo $row["titel"]; ?>
                </td>
                <td>
                    <?php echo $row["beschreibung"]; ?>
                </td>
                <td>
                    <?php echo $row["erstellungsdatum"]; ?>
                </td>
                <td>
                    <?php echo $row["faelligkeitsdatum"]; ?>
                </td>
                <td>
                    <a href="aufgaben_update.php?id=<?php echo $row["id"]; ?>">
                        bearbeiten
                    </a>
                </td>
                <td>
                    <a href="aufgaben_delete.php?id=<?php echo $row["id"]; ?>">
                        löschen
                    </a>
                </td>
            </tr>
<?php
    }
}
?>
            <tr>
                <td class="leer"></td>
            </tr>
            <tr>
                <td class="leer">
                <form action="index.php" method="post">
                    <input type="submit" name="submit" value="Json-Datei erzeugen">
                </form>
                </td>
            </tr>
        </table>
<?php
}
require_once("bottom.php");