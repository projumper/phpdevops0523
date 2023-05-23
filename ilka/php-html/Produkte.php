<?php
class Produkte
{
    public $name;
 
    public $preis;
    public $ps;
    public $stock;
    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "produkte");
    }

    public function fetchAll()
    {
        $produkte = array();

        $res = $this->con1->query("SELECT * FROM produkte ");

        while ($row = $res->fetch_assoc()) {
    
            $produktX = array('name'=>$row['name'], 'preis'=>$row['preis'], 'ps'=>$row['ps']);
            $produkte[] = $produktX;

        }

        return $produkte;
    }

    public function fetch($id)
    {
        //code
    }

    public function save()
    {
        $name =  $this->name;
        $preis = $this->preis;
        $ps = $this->ps;
        $stock = $this->stock;

        $res = $this->con1->query("INSERT INTO produkte (name, preis, ps, stock)" .
                "VALUES ($name, $preis, $ps, $stock)");
        if (mysqli_query($this->con1, $res))
            return true; 
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

