<?php
class Tasks
{
    public $id;
    public $title;
    public $description;
    public $created_at;
    public $updated_at;
    public $con1;

    //CRUD Create, Read, Update, Delete

    public function __construct()
    {
        $this->con1 = $mysqli = new mysqli("localhost", "root", "", "tasks");
    }

    public function fetchAll()
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'title'=>$row['title'], 'description'=>$row['description'], 'created_at'=>$row['created_at']
            , 'updated_at'=>$row['updated_at']);
            $tasks[] = $taskX;

        }

        return $tasks;
    }

    public function fetch($id)
    {
        $tasks = array();

        $res = $this->con1->query("SELECT * FROM tasks WHERE id = 1");

        while ($row = $res->fetch_assoc()) {
    
            $taskX = array('id'=>$row['id'], 'title'=>$row['title'], 'description'=>$row['description'], 'created_at'=>$row['created_at']
            , 'updated_at'=>$row['updated_at']);
            $tasks[] = $taskX;
        }

        return $tasks;
    }

    public function save()
    {
        $title =  $this->title;
        $description = $this->description;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        $sql = "INSERT INTO tasks (title)" .
        "VALUES ('$title')";
        if ($this->con1->query($sql) === TRUE) {
    //    $res = $this->con1->query("INSERT INTO tasks (title, description, created_at, updated_at)" .
    //            "VALUES ($title, $description, $created_at, $updated_at)");
            return true;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tasks WHERE id = $id";
        if ($this->con1->query($sql) === TRUE) {
            return true;
        }
    }

    public function updated($id)
    {
        $title =  $this->title;
        $description = $this->description;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        $sql = $this->con1->query("UPDATE tasks SET title = $title, description = $description, 
            created_at = $created_at, updated_at = $updated_at WHERE id = $id");
        if ($this->con1->query($sql) === TRUE) {
            return true;
        }
    }
}