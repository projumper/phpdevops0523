<?php
$datei = "text.txt";

$name = basename($datei);
$typ = filetype($datei);
$groesse = filesize($datei);
$zeit = date ("d.m.Y H:i:s.", filemtime($datei));

echo "Name: " . $name . "<br>";
echo "Typ: " . $typ . "<br>";
echo "Größe: " . $groesse . "<br>";
echo "Änderungsdatum: " . $zeit . "<br>";