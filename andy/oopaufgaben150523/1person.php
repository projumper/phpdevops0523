<?php

class Person {
  private $name;
  private $alter;

  public function setName($name) {
    $this->name = $name;
  }

  public function setAlter($alter) {
    $this->alter = $alter;
  }

  public function getName() {
    return $this->name;
  }

  public function getAlter() {
    return $this->alter;
  }
}


