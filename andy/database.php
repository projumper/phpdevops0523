<?php
$servername = "awseb-e-uy7egtc6ti-stack-awsebrdsdatabase-icx5pfyyg3eo.ckfipzcqm9gp.eu-central-1.rds.amazonaws.com";  
$username = "ebroot";  
$password = "Prodigy02021983";  


$conn = new mysqli($servername, $username, $password);

// Verbindung überprüfen:

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
 }

$sql = "CREATE DATABASE sqltest ";
$res = $conn->query($sql);