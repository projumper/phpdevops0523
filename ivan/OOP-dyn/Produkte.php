<?php

class Produkte
{

    public $name;
 
    public $preis;

    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "pim");
    }


    public function fetchAll()
    {
        $produkte = array();

        $res = $this->con1->query("SELECT * FROM produkte ");

        while ($row = $res->fetch_assoc()) {
    
            $produktX = array('name'=>$row['name'], 'preis'=>$row['preis'], 'farbe'=>$row['farbe'] );
            $produkte[] = $produktX;

        }

        return $produkte;
    }

    public function fetch($id)
    {
        //code
    }

    public function calculate_pro($value1, $value2, $operator)
    {

     //   if (!check($value1, $value2, $operator)) 
      //  {
       // echo "Parameter hauen nicht hin !";
       // return false;
       // }


        if ($operator == '+') 
        return $value1 + $value2;

        if ($operator == '-') 
        return $value1 - $value2;

        if ($operator == '/') 
        return $value1 / $value2;

        if ($operator == '*') 
        return $value1 * $value2;

        if ($operator == '%') 
        return $value1 * (($value2 + 100)/100);

    }

}

