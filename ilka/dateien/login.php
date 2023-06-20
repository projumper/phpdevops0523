<?php
$servername = "localhost";  
$username = "root";  
$password = "";  

$conn = new mysqli($servername, $username, $password);
$conn->select_db ("user");

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT id FROM user WHERE username = '" . $_GET['username'] . "' AND password = '" . $_GET['password'] . "'";
$res = $conn->query($sql);

if ($res->num_rows > 0)
{
    echo json_encode("OK");
} else {
    echo json_encode("NOT OK");
}