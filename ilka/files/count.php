<?php
$file  = fopen("text.txt", "r");
$lines = "";

while(($line = fgets($file)) !== false)
{
    $lines .= $line;
}

$anzahl = strlen($lines);
echo $anzahl;