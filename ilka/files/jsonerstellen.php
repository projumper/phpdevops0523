<?php
$array = array();
$array['author'] = "Ilka";
$array['timestamp'] = time();
$array['mag_eis'] = array();
$array['mag_eis'][] = "Stracciatella";
$array['mag_eis'][] = "Vanille";

file_put_contents("file.json", json_encode($array, JSON_PRETTY_PRINT));