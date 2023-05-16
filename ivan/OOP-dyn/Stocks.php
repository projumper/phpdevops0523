<?php

class Stocks
{

    public $id;

    public $produktname;


    public $anzahl;

    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "pim");
    }


    public function fetchAll()
    {
        $stocks = array();

        $res = $this->con1->query("SELECT * FROM stocks ");

        while ($row = $res->fetch_assoc()) {
    
            $stockX = array('id'=>$row['id'], 'produktname'=>$row['produktname'],'anzahl'=>$row['anzahl'] );
            $stocks[] = $stockX;

        }
        return $stocks;
    }

}

