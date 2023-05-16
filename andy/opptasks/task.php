<?php

class Task {
        private $id;
        private $title;
        private $description;
        private $created_at;
        private $updated_at;
      
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
      
        public function save() {
          // Code, um den Task in der Datenbank zu speichern
        }
      
        public function update() {
          // Code, um den Task in der Datenbank zu aktualisieren
        }
      
        public function delete() {
          // Code, um den Task aus der Datenbank zu löschen
        }
      }
