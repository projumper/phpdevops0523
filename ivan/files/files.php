<?php

//https://www.php.net/manual/de/function.fopen.php

//Datei öffnen und schliessen
$file  = fopen("phplogo.svg", "w+");
if($file)
{
    echo "file opened";
    echo "jetzt kann die Datei geschlossen weden:\n\r";
    //fclose($file);
    
}else{

    var_dump($file);
}


//Datei lesen
if($file)
{
    $lines = array();
    
    while(($line = fgets($file)) !== false)
    {
        $lines[] = $line;
    }

    var_dump($lines);
 
}


//Datei schreiben
$file  = fopen("phplogo.svg", "w+");
for ($i = 0; $i <= 100; $i++)
{

    $text = $i;

    fwrite($file, $text."\n");
}

fclose($file);

