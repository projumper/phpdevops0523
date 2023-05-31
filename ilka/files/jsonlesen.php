<?php
$file = file_get_contents("file.json");
$json_decoded = json_decode($file);
$json_decoded->author = "Ivan";
$newJsonString = json_encode($json_decoded);
file_put_contents('file.json', $newJsonString);
$array = json_decode(file_get_contents("file.json"), true);
print_r($array);