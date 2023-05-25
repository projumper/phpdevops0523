<?php

$servername = "localhost;  
$username = "root";  
$password = "";  
$dbname = "pim";  

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen:

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
 }

$sql = "CREATE DATABASE test";
$res = $conn->query($sql);
$users = array();

        while ($row = $res->fetch_assoc()) {
    
            $userX = array('id'=>$row['id'], 'name'=>$row['name'], 'email'=>$row['email']);
            $users[] = $userX;

        }

var_dump($users);