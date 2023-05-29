<?php
$servername = "awseb-e-uy7egtc6ti-stack-awsebrdsdatabase-icx5pfyyg3eo.ckfipzcqm9gp.eu-central-1.rds.amazonaws.com";  
$username = "ebroot";  
$password = "Prodigy02021983";  
$dbname = "tasks"

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen:

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
 }

$sql = "CREATE TABLE `tasks` (`id` INT(11) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `comment` TEXT NOT NULL , `created_at` DATE NOT NULL , `updated_at` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
$res = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
echo "Tabelle 'tasks' erfolgreich erstellt.";
} else {
echo "Fehler beim Erstellen der Tabelle: " . $conn->error;
}

// Verbindung schließen:

$conn->close();