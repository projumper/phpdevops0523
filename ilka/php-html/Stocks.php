<?php
class Stocks
{

    public $gruppe;
 
    public $anzahl;

    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "stock");
    }

    public function fetchAll()
    {
        $stocks = array();

        $res = $this->con1->query("SELECT * FROM stock ");

        while ($row = $res->fetch_assoc()) {
    
            $stockX = array('id'=>$row['id'], 'gruppe'=>$row['gruppe'], 'anzahl'=>$row['anzahl']);
            $stocks[] = $stockX;

        }

        return $stocks;
    }

    public function fetch($id)
    {
        //code
    }
}

