<?php
class Person
{
    public $name;
    public $alter;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name) {
		$this->name = $name;
	}

    public function getAlter()
    {
        return $this->alter;
    }

    public function setAlter($alter) {
		$this->alter = $alter;
	}
}