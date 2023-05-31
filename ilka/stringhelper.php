<?php
namespace Util;

$hallo = "";
class StringHelper
{
    public function reverse($string)
    {
        $ausgabe = strrev($string);
        return $ausgabe;
    }
}

$aufruf = new \Util\StringHelper();
$hallo = $aufruf->reverse("Hallo");
echo $hallo;