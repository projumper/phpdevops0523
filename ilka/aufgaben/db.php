<?php
/*
$servername = "awseb-e-uy7egtc6ti-stack-awsebrdsdatabase-icx5pfyyg3eo.ckfipzcqm9gp.eu-central-1.rds.amazonaws.com";  
$username = "ebroot";  
$password = "Prodigy02021983";  
*/
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
$conn->select_db ("aufgaben");