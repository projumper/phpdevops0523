<?php
$file  = fopen("text.txt", "r");

if($file)
{
    $lines = array();
    
    while(($line = fgets($file)) !== false)
    {
        $lines[] = $line;
    }
}

$file2  = fopen("text2.txt", "w");

foreach ($lines as $line)
{
    fwrite($file2, $line."\n");
}

fclose($file);