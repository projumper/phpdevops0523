<?php 

class Task {
    public $id;
    public $title;
    public $description;
    public $created_at;
    public $updated_at;
  
    public function getId() {
      return $this->id;
    }
  
    public function getTitle() {
      return $this->title;
    }
  
    public function setTitle($title) {
      $this->title = $title;
    }
  
    public function getDescription() {
      return $this->description;
    }
  
    public function setDescription($description) {
      $this->description = $description;
    }
  
    public function getCreatedAt() {
      return $this->created_at;
    }
  
    public function setCreatedAt($created_at) {
      $this->created_at = $created_at;
    }
  
    public function getUpdatedAt() {
      return $this->updated_at;
    }
  
    public function setUpdatedAt($updated_at) {
      $this->updated_at = $updated_at;
    }
  
    
  }
  