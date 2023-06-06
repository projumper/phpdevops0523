<?php
require_once("db.php");

if (isset($_POST['abschicken']))
{
    $sql = "INSERT INTO aufgaben (titel, beschreibung, faelligkeitsdatum)" .
            "VALUES ('" . $_POST['titel'] . "', '" . $_POST['beschreibung'] . "','" . $_POST['faelligkeitsdatum'] . "')";
    if ($conn->query($sql) === TRUE) {
    echo "Datensatz erstellt.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

require_once("top.php");
?>
        <form action="aufgaben_neu.php" method="post">
            <table border="0">
                <tr>
                    <td>
                        Titel
                    </td>
                    <td>
                        Beschreibung
                    </td>
                    <td>
                        Fälligkeitsdatum
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="titel">
                    </td>
                    <td>
                        <input type="text" name="beschreibung">
                    </td>
                    <td>
                        <input type="text" name="faelligkeitsdatum" value="Y-m-d">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="abschicken" value="abschicken">
                    </td>
                </tr>
            </table>
        </form>
<?php
require_once("bottom.php");