<?php
require_once("db.php");
require_once("top.php");

$sql = "DELETE FROM aufgaben WHERE id = " . $_GET['id'];
if ($conn->query($sql) === TRUE) {
    echo "Datensatz gelöscht.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
require_once("bottom.php");
?>