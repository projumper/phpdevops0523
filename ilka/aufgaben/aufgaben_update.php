<?php
require_once("db.php");

if (isset($_POST['id']))
{
    $_GET['id'] = $_POST['id'];
}

$sql = "SELECT id, titel, beschreibung, erstellungsdatum, faelligkeitsdatum FROM aufgaben WHERE id = " . $_GET['id'];
$result = $conn->query($sql);

if (isset($_POST['abschicken']))
{
    $sql = "UPDATE aufgaben SET titel = '" . $_POST['titel'] . "', 
            beschreibung = '" . $_POST['beschreibung'] . "', 
            erstellungsdatum = '" . $_POST['erstellungsdatum'] . "', 
            faelligkeitsdatum = '" . $_POST['faelligkeitsdatum'] . "'";
    if ($conn->query($sql) === TRUE) {
    echo "Datensatz geändert.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

require_once("top.php");
?>
        <form action="aufgaben_update.php" method="post">
            <table border="0">
                <tr>
                    <td>
                        ID
                    </td>
                    <td>
                        Titel
                    </td>
                    <td>
                        Beschreibung
                    </td>
                    <td>
                        Erstellungsdatum
                    </td>
                    <td>
                        Fälligkeitsdatum
                    </td>
                </tr>
                <?php
if ($result->num_rows > 0) {
?>
            <tr>
<?php
    while($row = $result->fetch_assoc()) {
?>
                    <td>
                        <?php echo $row['id']; ?><input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </td>
                    <td>
                        <input type="text" name="titel" value="<?php echo $row['titel']; ?>">
                    </td>
                    <td>
                        <input type="text" name="beschreibung" value="<?php echo $row['beschreibung']; ?>">
                    </td>
                    <td>
                        <input type="text" name="erstellungsdatum" value="<?php echo $row['erstellungsdatum']; ?>">
                    </td>
                    <td>
                        <input type="text" name="faelligkeitsdatum" value="<?php echo $row['faelligkeitsdatum']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="abschicken" value="abschicken">
                    </td>
                </tr>
<?php
    }
?>
            </tr>
<?php
}
?>
            </table>
        </form>
<?php
require_once("bottom.php");