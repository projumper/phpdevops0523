<?php

//Datentypen:

    //a) Erstelle eine Variable vom Typ Integer und weise ihr den Wert 10 zu. Gib den Wert auf dem Bildschirm aus.

        //$zahl = 10;
        //echo $zahl;

    //b) Erstelle eine Variable vom Typ String und weise ihr deinen Namen zu. Gib den Namen auf dem Bildschirm aus.

        //$name = "Andy";
        //echo "Ich heisse " . $name;

    //c) Erstelle eine Variable vom Typ Boolean und weise ihr den Wert true zu. Gib den Wert auf dem Bildschirm aus.

        //$var = true;
        //echo $var;

        //alternativ

        //$var = true;
        //echo var_dump($var);

//Schleifen:

    //a) Schreibe eine Schleife, die die Zahlen von 1 bis 10 ausgibt.

        //for ($i = 1; $i <= 10; $i++) 
       // {
            //echo $i;
        //}

    //b) Schreibe eine Schleife, die die geraden Zahlen von 1 bis 20 ausgibt.

        //for ($i = 2; $i <= 20; $i += 2) 
        //{echo $i;if ($i%2==0)echo "gerade";}

    //c) Schreibe eine Schleife, die die Zahlen von 10 bis 1 rückwärts ausgibt.

        //for ($i = 10; $i >= 1; $i--) 
        //{echo $i;}

//Bedingungen:

    //a) Schreibe eine Bedingung, die prüft, ob eine Variable den Wert 5 hat. Gib "Die Variable ist gleich 5" aus, 
    //   wenn die Bedingung erfüllt ist, ansonsten gib "Die Variable ist nicht gleich 5" aus.

        //$variable = x;

        //if ($variable == 5) 
        //{echo "Die Variable ist gleich 5";} 
        //else 
        //{echo "Die Variable ist nicht gleich 5";}

    //b) Schreibe eine Bedingung, die prüft, ob eine Variable gerade oder ungerade ist. 
    //   Gib entsprechend "Die Variable ist gerade" oder "Die Variable ist ungerade" aus.

        //$zahl = x; 

        //if ($zahl % 2 == 0) 
        //{echo "Die Variable ist gerade.";} 
        //else 
        //{echo "Die Variable ist ungerade.";}

//Funktionen:

    //a) Erstelle eine Funktion, die zwei Zahlen als Parameter erhält und ihre Summe zurückgibt. Teste die Funktion mit verschiedenen Zahlen.

        //function addNumbers($a, $b) 
        //{$sum = $a + $b; return $sum;}
        //echo addNumbers(5, 4);
        //echo addNumbers(7, 3);

    //b) Erstelle eine Funktion, die prüft, ob eine übergebene Zahl gerade oder ungerade ist, 
    //   und entsprechend "Die Zahl ist gerade" oder "Die Zahl ist ungerade" zurückgibt. Teste die Funktion mit verschiedenen Zahlen.
      
        function geradeungerade($zahl) 
        {if ($zahl % 2 == 0) {return "Die Zahl ist gerade";} 
        else {return "Die Zahl ist ungerade";}}

        echo geradeungerade(2); 
        echo geradeungerade(5); 





