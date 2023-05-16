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

          //INSERT INTO `tasks` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES (NULL, 'schlafen', 'in_der_nacht_schlafen', '2023-05-16 16:31:14', '2023-05-16 20:00:00');
        
        //$id;
        $title =  $this->title;
        $description = $this->description;
        $created_at = $this->created_at;
        $updated_at = $this->updated_at;

        $sql = "INSERT INTO `tasks` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES (NULL, '$title', '$description', '$created_at', '$updated_at')";
        
        
        $this->con1->query($sql);
        }
      
        public function update() {
          // Code, um den Task in der Datenbank zu aktualisieren
        }
      
        public function delete() {
          // Code, um den Task aus der Datenbank zu löschen
        }
      }
