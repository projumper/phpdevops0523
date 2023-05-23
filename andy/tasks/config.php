<?php
die();
$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "pim"; 

//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli("localhost", "root", "", "pim");

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 