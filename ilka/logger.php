<?php
namespace Logging;

$ausgabe = "";
class Logger
{
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        $anzeige = "<script>console.log('Debug Objects: " . $output . "' );</script>";
        return $anzeige;
    }
}

$aufruf = new \Logging\Logger();
$ausgabe = $aufruf->debug_to_console("Hallo");
echo $ausgabe;